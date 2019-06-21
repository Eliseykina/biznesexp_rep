<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
?>
<!doctype html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
        <?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle()?></title>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css", true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.min.css", true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.css", true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.theme.css", true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.transitions.css", true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/nivo-slider.css", true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/meanmenu.min.css", true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery-ui.css", true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/animate.css", true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/main.css", true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css", true);?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/responsive.css", true);?>
    </head>
    <body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<!-- HEADER-AREA START -->
		<header class="header-area">
			<!-- HEADER-TOP START -->
			<div class="header-top hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="top-menu">
								<!-- Start Language -->
								<ul class="language">
									<li><a href="#"><img class="right-5" src="img/flags/gb.png" alt="#">English<i class="fa fa-caret-down left-5"></i></a>
										<ul>
											<li><a href="#"><img class="right-5" src="img/flags/fr.png" alt="#">French</a></li>
											<li><a href="#"><img class="right-5" src="img/flags/gb.png" alt="#">English</a></li>
											<li><a href="#"><img class="right-5" src="img/flags/gb.png" alt="#">English</a></li>
										</ul>
									</li>
								</ul>
								<!-- End Language -->
								<!-- Start Currency -->
								<ul class="currency">
									<li><a href="#"><strong>$</strong> USD<i class="fa fa-caret-down left-5"></i></a>
										<ul>
											<li><a href="#">$ EUR</a></li>
											<li><a href="#">$ GBP</a></li>
											<li><a href="#">$ USD</a></li>
										</ul>
									</li>
								</ul>
								<!-- End Currency -->
								<p class="welcome-msg">Default welcome msg!</p>
							</div>
							<!-- Start Top-Link -->
							<div class="top-link">
								<ul class="link">
									<li><a href="my-account.html"><i class="fa fa-user"></i> My Account</a></li>
									<li><a href="wishlist.html"><i class="fa fa-heart"></i> Wish List (0)</a></li>
									<li><a href="checkout.html"><i class="fa fa-share"></i> Checkout</a></li>
									<li><a href="account.html"><i class="fa fa-unlock-alt"></i> Login</a></li>
								</ul>
							</div>
							<!-- End Top-Link -->
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER-TOP END -->
			<!-- HEADER-MIDDLE START -->
			<div class="header-middle">
				<div class="container">
					<!-- Start Support-Client -->
					<div class="support-client hidden-xs">
						<div class="row">
							<!-- Start Single-Support -->
							<div class="col-md-3 hidden-sm">
								<div class="single-support">
									<div class="support-content">
										<i class="fa fa-clock-o"></i>
										<div class="support-text">
											<h1 class="zero gfont-1">working time</h1>
											<p>Mon- Sun: 8.00 - 18.00</p>
										</div>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-truck"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Free shipping</h1>
										<p>On order over $199</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-money"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Money back 100%</h1>
										<p>Within 30 Days after delivery</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-phone-square"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Phone: 0123456789</h1>
										<p>Order Online Now !</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
						</div>
					</div>
					<!-- End Support-Client -->
					<!-- Start logo & Search Box -->
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="logo">
								<a href="index.html" title="Malias"><img src="img/logo.png" alt="Malias"></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-12">
		                    <div class="quick-access">
		                    	<div class="search-by-category">
		                    		<div class="search-container">
			                    		<select>
			                    			<option class="all-cate">All Categories</option>
											<optgroup  class="cate-item-head" label="Cameras & Photography">
												<option class="cate-item-title">Handbags</option>
												<option class="c-item">Blouses And Shirts</option>
												<option class="c-item">Clouthes</option>
											</optgroup>
											<optgroup  class="cate-item-head" label="Laptop & Computer">
												<option class="cate-item-title">Apple</option>
												<option class="c-item">Dell</option>
												<option class="c-item">Hp</option>
												<option class="c-item">Sony</option>
											</optgroup>
											<optgroup  class="cate-item-head" label="Electronic">
												<option class="c-item">Mobile</option>
												<option class="c-item">Speaker</option>
												<option class="c-item">Headphone</option>
											</optgroup>
			                    		</select>
		                    		</div>
		                    		<div class="header-search">
		                    			<form action="#">
			                    			<input type="text" placeholder="Search">
			                    			<button type="submit"><i class="fa fa-search"></i></button>
		                    			</form>
		                    		</div>
		                    	</div>
		                    	<div class="top-cart">
		                    		<ul>
		                    			<li>
			                    			<a href="cart.html">
			                    				<span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
			                    				<span class="cart-total">
			                    					<span class="cart-title">shopping cart</span>
				                    				<span class="cart-item">2 item(s)- </span>
				                    				<span class="top-cart-price">$365.00</span>
			                    				</span>
			                    			</a>
											<div class="mini-cart-content">
												<div class="cart-img-details">
													<div class="cart-img-photo">
														<a href="#"><img src="img/product/total-cart.jpg" alt="#"></a>
													</div>
													<div class="cart-img-content">
														<a href="#"><h4>Prod Aldults</h4></a>
														<span>
															<strong class="text-right">1 x</strong>
															<strong class="cart-price text-right">$180.00</strong>
														</span>
													</div>
													<div class="pro-del">
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div>
												<div class="clear"></div>
												<div class="cart-img-details">
													<div class="cart-img-photo">
														<a href="#"><img src="img/product/total-cart2.jpg" alt="#"></a>
													</div>
													<div class="cart-img-content">
														<a href="#"><h4>Fact Prone</h4></a>
														<span>
															<strong class="text-right">1 x</strong>
															<strong class="cart-price text-right">$185.00</strong>
														</span>
													</div>
													<div class="pro-del">
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div>
												<div class="cart-inner-bottom">
													<span class="total">
														Total:
														<span class="amount">$550.00</span>
													</span>
													<span class="cart-button-top">
														<a href="cart.html">View Cart</a>
														<a href="checkout.html">Checkout</a>
													</span>
												</div>
											</div>
		                    			</li>
		                    		</ul>
		                    	</div>
		                    </div>
		                </div>
					</div>
					<!-- End logo & Search Box -->
				</div> 
			</div>
			<!-- HEADER-MIDDLE END -->
			<!-- START MAINMENU-AREA -->
			<div class="mainmenu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mainmenu hidden-sm hidden-xs">
								<nav>
									<ul>
										<li><a href="index.html">Home</a>
											<ul>
												<li><a href="index.html">Home Versions 1</a></li>
												<li><a href="index-2.html">Home Versions 2</a></li>
											</ul>
										</li>
										<li><a href="about.html">About Us</a></li>
										<li class="hot"><a href="shop.html">Bestseller Products</a></li>
										<li class="new"><a href="shop-list.html">New Products</a></li>
										<li><a href="shop.html">Special Products</a></li>
										<li><a href="#">Pages</a>
											<ul>
												<li><a href="cart.html">Cart</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="account.html">Create Account</a></li>
												<li><a href="my-account.html">My Account</a></li>
												<li><a href="product-details.html">Product details</a></li>
												<li><a href="shop.html">Shop Grid View</a></li>
												<li><a href="shop-list.html">Shop List View</a></li>
												<li><a href="wishlist.html">Wish List</a></li>
											</ul>
										</li>
										<li><a href="contact.html">Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN-MENU-AREA -->
			<!-- Start Mobile-menu -->
			<div class="mobile-menu-area hidden-md hidden-lg">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<nav id="mobile-menu">
								<ul>
									<li><a href="index.html">Home</a>
										<ul>
											<li><a href="index.html">Home Page 1</a></li>
											<li><a href="index-2.html">Home Page 2</a></li>
										</ul>
									</li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="shop.html">Bestseller Products</a></li>
									<li><a href="shop-list.html">New Products</a></li>
									<li><a href="#">Pages</a>
										<ul>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="account.html">Create Account</a></li>
											<li><a href="login.html">Login</a></li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="product-details.html">Product details</a></li>
											<li><a href="shop.html">Shop Grid View</a></li>
											<li><a href="shop-list.html">Shop List View</a></li>
											<li><a href="wishlist.html">Wish List</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact Us</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- End Mobile-menu -->
		</header>
		<!-- HEADER AREA END -->
		<!-- Category slider area start -->
		<div class="category-slider-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<!-- CATEGORY-MENU-LIST START -->
	                    <div class="left-category-menu hidden-sm hidden-xs">
	                        <div class="left-product-cat">
	                            <div class="category-heading">
	                                <h2>categories</h2>
	                            </div>
	                            <div class="category-menu-list">
	                                <ul>
	                                    <!-- Single menu start -->
	                                    <li class="arrow-plus">
	                                        <a href="shop.html">Cameras & Photography</a>
	                                        <!--  MEGA MENU START -->
	                                        <div class="cat-left-drop-menu">
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Handbags</a>
	                                                <ul>
	                                                    <li><a href="#">Blouses And Shirts</a></li>
	                                                    <li><a href="#">Clutches</a></li>
	                                                    <li><a href="#">Cross Body</a></li>
	                                                    <li><a href="#">Satchels</a></li>
	                                                    <li><a href="#">Sholuder</a></li>
	                                                    <li><a href="#">Toter</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Tops</a>
	                                                <ul>
	                                                    <li><a href="#">Evening</a></li>
	                                                    <li><a href="#">Long Sleeved</a></li>
	                                                    <li><a href="#">Short Sleeved</a></li>
	                                                    <li><a href="#">Sleeveless</a></li>
	                                                    <li><a href="#">T-Shirts</a></li>
	                                                    <li><a href="#">Tanks And Camis</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Dresses</a>
	                                                <ul>
	                                                    <li><a href="#">Belts</a></li>
	                                                    <li><a href="#">Cocktail</a></li>
	                                                    <li><a href="#">Day</a></li>
	                                                    <li><a href="#">Evening</a></li>
	                                                    <li><a href="#">Sundresses</a></li>
	                                                    <li><a href="#">Sweater</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Accessories</a>
	                                                <ul>
	                                                    <li><a href="#">Bras</a></li>
	                                                    <li><a href="#">Hair Accessories</a></li>
	                                                    <li><a href="#">Hats And Gloves</a></li>
	                                                    <li><a href="#">Lifestyle</a></li>
	                                                    <li><a href="#">Scarves</a></li>
	                                                    <li><a href="#">Small Leathers</a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                        <!-- MEGA MENU END -->
	                                    </li>
	                                    <!-- Single menu end -->
										<!-- Single menu start -->
	                                    <li class="arrow-plus">
	                                        <a href="shop.html">Tv & Audio</a>
	                                        <!--  MEGA MENU START -->
	                                        <div class="cat-left-drop-menu">
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">BAGS</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">CLOTHING</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">LINGERIE</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Shoes</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                        <!-- MEGA MENU END -->
	                                    </li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li class="arrow-plus">
	                                        <a href="shop.html">SmartPhones & Tablets</a>
	                                        <!--  MEGA MENU START -->
	                                        <div class="cat-left-drop-menu cat-left-drop-menu-photo-contain">
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Women</a>
	                                                <ul>
	                                                    <li><a href="#">Belts</a></li>
	                                                    <li><a href="#">Jewelry</a></li>
	                                                    <li><a href="#">Socks</a></li>
	                                                    <li><a href="#">Sunglasses</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">CLOTHING</a>
	                                                <ul>
	                                                    <li><a href="#">Boots</a></li>
	                                                    <li><a href="#">Brands We Love</a></li>
	                                                    <li><a href="#">Casuals</a></li>
	                                                    <li><a href="#">Gifts And Tech</a></li>
	                                                    <li><a href="#">Gifts And Tech</a></li>
	                                                    <li><a href="#">Slippers</a></li>
	                                                    <li><a href="#">Speakers</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left cat-left-drop-menu-photo">
	                                            	<a href="#"><img src="img/megamenu/vmega_blog1.jpg" alt="Product"></a>
	                                            </div>
	                                        </div>
	                                        <!-- MEGA MENU END -->
	                                    </li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li>
	                                        <a href="shop.html">Laptop & Computer</a>
	                                    </li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li><a href="shop.html">Sony</a></li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li><a href="shop.html">Mobile</a></li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li><a href="shop.html">Sports</a></li>
	                                    <!-- Single menu end -->

	                                    <!-- MENU ACCORDION START -->
	                                    <li class=" rx-child">
	                                        <a href="shop.html">Books</a>
	                                    </li>
	                                    <li class=" rx-parent">
	                                        <a class="rx-default">
	                                            More categories <span class="cat-thumb  fa fa-plus"></span> 
	                                        </a>
	                                        <a class="rx-show">
	                                            close menu <span class="cat-thumb  fa fa-minus"></span>
	                                        </a>
	                                    </li>
	                                    <!-- MENU ACCORDION END -->
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END CATEGORY-MENU-LIST -->
	                </div>
	                <div class="col-md-9">
	                
	                <!--тело страницы начало!!!-->
                		<!-- slider -->
						<div class="slider-area">
							<div class="bend niceties preview-1">
								<div id="ensign-nivoslider" class="slides">	
									<img src="img/sliders/slider-1/bg1.jpg" alt="Malias" title="#slider-direction-1"/>
				 					<img src="img/sliders/slider-1/bg2.jpg" alt="Malias" title="#slider-direction-2"/>
									<img src="img/sliders/slider-1/bg3.jpg" alt="Malias" title="#slider-direction-3"/><!-- 
									<img src="img/sliders/slider-1/bg4.jpg" alt="" title="#slider-direction-4"/>  -->     
								</div>
								<!-- direction 1 -->
								<div id="slider-direction-1" class="t-lfr slider-direction">
									<div class="slider-progress"></div>
									<!-- layer 1 -->
									<div class="layer-1-1 ">
										<h1 class="title1">LUMIA 888 DESIGN</h1>
									</div>
									<!-- layer 2 -->
									<div class="layer-1-2">
										<p class="title2">Elegant design for business</p>
									</div>
									<!-- layer 3 -->
									<div class="layer-1-3">
										<h2 class="title3">$966.82</h2>
									</div>
									<!-- layer 4 -->
									<div class="layer-1-4">
										<a href="#" class="title4">shopping now</a>
									</div>
								</div>
								<!-- direction 2 -->
								<div id="slider-direction-2" class="slider-direction">
									<div class="slider-progress"></div>
									<!-- layer 1 -->
									<div class="layer-2-1">
										<h1 class="title1">WATERPROOF SMARTPHONE</h1>
									</div>
									<!-- layer 2 -->
									<div class="layer-2-2">
										<p class="title2">RODUCTS ARE EYE-CATCHING DESIGN. YOU CAN TAKE PHOTOS EVEN WHEN Y</p>
									</div>
									<!-- layer 3 -->
									<div class="layer-2-3">
										<a href="#" class="title3">shopping now</a>
									</div>
								</div>
								<!-- direction 3 -->
								<div id="slider-direction-3" class="slider-direction">
									<div class="slider-progress"></div>
									<!-- layer 1 -->
									<div class="layer-3-1">
										<h2 class="title1">BUY AIR LACOTE</h2>
									</div>
									<!-- layer 2 -->
									<div class="layer-3-2">
										<h1 class="title2">SUPER TABLET, SUPER GIFT</h1>
									</div>
									<!-- layer 3 -->
									 <div class="layer-3-3">
										<p class="title3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
									</div>
									<!-- layer 4 -->
									<div class="layer-3-4">
										<a href="#" class="title4">shopping now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- slider end-->
	                </div>
	            </div>
			</div>
		</div>
		<!-- Category slider area End -->	
