<?
/**
* Created by olegpro.ru.
* User: Oleg Maksimenko 
* Date: 05.05.2016 22:58
*/
namespace Olegpro\Handlers\Sale;
use Bitrix\Main\SiteTable;
use Bitrix\Main\Application;
class OrderAjaxComponent
{
 /**
  * @param $orderId
  * @param $arOrder
  * @param $arParams
  */
 function AddYandexMetricsEcommerceCode($orderId, $arOrder, $arParams)
 {
  global $APPLICATION;
  if (isset($_SESSION['YM_ORDER_ID']) && $_SESSION['YM_ORDER_ID'] == $orderId) {
   return;
  }
  if (!($order = \CSaleOrder::GetByID($orderId))) {
   return;
  }
  $site = SiteTable::getRowById($arOrder['LID']);
  $server = Application::getInstance()->getContext()->getServer();
  $output = [
   'ecommerce' => [
    'currencyCode' => (string)$order['CURRENCY'],
    'purchase' => [
     'actionField' => [
      'id' => (int)$order['ID'],
      'affiliation' => (is_array($site) ? $site['NAME'] : $server->getHttpHost()),
      'revenue' => (float)$order['PRICE'],
      'tax' => 0.00,
      'shipping' => (float)$order['PRICE_DELIVERY'],
      // 'goal_id' => 19768025,
     ],
     'products' => [],
    ],
   ]
  ];
  $basketIterator = \CSaleBasket::GetList(
   array(
    'NAME' => 'ASC',
   ),
   array(
    'ORDER_ID' => $orderId,
   ),
   false,
   false,
   array(
    'PRODUCT_ID',
    'NAME',
    'PRICE',
    'QUANTITY',
   )
  );
  $basketItems = array();
  $productsIds = array();
  $productsData = array();
  while ($basketItem = $basketIterator->fetch()) {
   $basketItems[] = $basketItem;
   $productsIds[] = $basketItem['PRODUCT_ID'];
  }
  unset($basketItem);
  $resProducts = \CIBlockElement::GetList(
   array(),
   array(
    'ID' => array_unique($productsIds)
   ),
   false,
   false,
   array(
    'ID',
    'IBLOCK_ID',
    'IBLOCK_SECTION_ID',
   )
  );
  while ($arProduct = $resProducts->Fetch()) {
   $arProduct['SECTION_NAME'] = '';
   if (intval($arProduct['IBLOCK_SECTION_ID']) > 0) {
    $sectionIterator = \CIBlockSection::GetList(
     array(),
     array(
      'ID' => $arProduct['IBLOCK_SECTION_ID'],
     ),
     false,
     array(
      'NAME',
     )
    );
    if ($arSection = $sectionIterator->Fetch()) {
     $arProduct['SECTION_NAME'] = $arSection['NAME'];
    }
   }
   $productsData[$arProduct['ID']] = $arProduct;
  }
  foreach ($basketItems as $basketItem) {
   $output['ecommerce']['purchase']['products'][] = [
    'id' => (int)$basketItem['PRODUCT_ID'],
    'name' => (string)$basketItem['NAME'],
    'category' => (string)(isset($productsData[$basketItem['PRODUCT_ID']])
     ? $productsData[$basketItem['PRODUCT_ID']]['SECTION_NAME']
     : ''),
    'price' => (float)$basketItem['PRICE'],
    'quantity' => (int)$basketItem['QUANTITY'],
   ];
  }
  \Bitrix\Main\Page\Asset::getInstance()->addString(
   '<script>(window.dataLayer || []).push(' . \CUtil::PhpToJSObject($output, false, true, true) . ')console.log("123");</script>',
   true
  );
  $_SESSION['YM_ORDER_ID'] = $orderId;
 }
}
?>
