<?
//AddEventHandler("sale", "OnBasketAdd", "AddPresentToBasket");
 
function AddPresentToBasket($ID, $arFields) 
   {
		file_put_contents($_SERVER['DOCUMENT_ROOT'].'/test.txt', var_export($arFields, true), FILE_APPEND); 
		//file_put_contents($_SERVER['DOCUMENT_ROOT'].'/test.js', 'console.log("444");', FILE_APPEND); 
		//echo '<script>console.log("444")</script>';
		return false;
   }
  AddEventHandler("sale", "OnSaleComponentOrderOneStepFinal", 
    array("WeSaleOrderAjaxHandler", "AddGoogleAnaliticsEcommerceCode"));
 
class WeSaleOrderAjaxHandler {
 
    /*Сработает в связке с компонентом sale.order.ajax*/

    function AddGoogleAnaliticsEcommerceCode($orderId, $arOrder, $arParams){
 
        global $APPLICATION;
 
        // выходим, если информация о этом заказе уже отправили в гугл
       // if(isset($_SESSION['GA_ORDER_ID']) && $_SESSION['GA_ORDER_ID'] == $orderId) return;
 
        $gaOutput = array();
 
        $arSite = CSite::GetByID($arOrder['LID'])->Fetch();
 
        $gaOutput[] = "<script>";
        $gaOutput[] = "window.dataLayer = window.dataLayer || [];";
        $gaOutput[] = "dataLayer.push({";
        $gaOutput[] = "\"ecommerce\": {";
        $gaOutput[] = "\"purchase\": {";
 
        $gaOutput[] = sprintf(
            "\"actionField\": {
                'id': '%s',
                'affiliation': '%s',
                'revenue': '%s',
                'shipping': '%s',
                'tax': ''
            },",
                $orderId,
                $arSite['NAME'],
                $arOrder['PRICE'],
                $arOrder['PRICE_DELIVERY']
        );
 
        $dbBasket = CSaleBasket::GetList(
            array("NAME" => "ASC"),
            array("ORDER_ID" => $orderId)
        );
         $gaOutput[] = "\"products\":[";
        while($basketItem = $dbBasket->fetch()){
         /*проверка на торговое предложение*/
            $mxResult = CCatalogSku::GetProductInfo($basketItem['PRODUCT_ID']);
            if (is_array($mxResult)) {
                $PRODUCT_ID = $mxResult['ID']; // ID товара родителя
            } else {
                $PRODUCT_ID = $basketItem['PRODUCT_ID']; // если не нашло, запишет ID торгового предложения
            }
            $resProducts = \CIBlockElement::GetList(
                array(),
                array(
                    'ID' => $PRODUCT_ID
                ),
                false,
                false,
                array(
                    'ID',
                    'IBLOCK_ID',
                    'IBLOCK_SECTION_ID',
                    'PROPERTY_MANUFACTURER',
                )
            );
            while ($arProduct = $resProducts->Fetch()) {
                echo '<pre>';       
                print_r($arProduct);
                echo '</pre>';       
                if ($arProduct['PROPERTY_MANUFACTURER_VALUE']<>''){
                    /*если тип свойстава БРЕНД - привязка к элементам инфоблока, строчки ниже раскомментировать!*/
                    /*$resBrands = \CIBlockElement::GetList(array(), array('ID' => $arProduct['PROPERTY_BRAND_NEW_VALUE']), false, false, array('NAME'));
                    if ($arBrands = $resBrands->Fetch()){
                        $basketItem['BRAND'] = $arBrands['NAME'];
                    }*/
                    /*если тип свойстава БРЕНД - привязка к элементам инфоблока, строчку ниже закомментировать!*/
                    $basketItem['BRAND'] = $arProduct['PROPERTY_MANUFACTURER_VALUE'];
                }else {
                    $basketItem['BRAND'] = '';
                }
                $basketItem['CATEGORY'] = '';
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
                        $basketItem['CATEGORY'] = $arSection['NAME'];
                    }
                }
            }
 
            $gaOutput[] = sprintf(
                "{  'id': '%s',
                    'name': '%s',
                    'sku': '%s',
                    'category': '%s',
                    'price': '%s',
                    'quantity': '%s',
                    'brand': '%s',
                },",
                    $orderId,
                    $basketItem['NAME'],
                    $basketItem['PRODUCT_ID'],
                    $basketItem['CATEGORY'],
                    $basketItem['PRICE'],
                    $basketItem['QUANTITY'],
                    $basketItem['BRAND']
            );
 
        }
        
        $gaOutput[] = "]}},";
        $gaOutput[] = "\"event\": \"gtm-ee-event\",";
        $gaOutput[] = "\"gtm-ee-event-category\": \"Enhanced Ecommerce\",";
        $gaOutput[] = "\"gtm-ee-event-action\": \"Purchase\",";
        $gaOutput[] = "\"gtm-ee-event-non-interaction\": \"False\",";
        $gaOutput[] = "});";
        $gaOutput[] = "</script>";
 
        echo implode("\n", $gaOutput);
 
        $_SESSION['GA_ORDER_ID'] = $orderId;
        
    
    }
 }
?>
