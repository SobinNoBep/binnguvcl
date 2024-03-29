<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from htmldemo.net/dilan/dilan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2024 05:02:14 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dilan - eCommerce HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/img/favicon.png')}}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/chosen.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
        <script src="{{asset('backend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!-- header start -->
        <header class="header-area transparent-bar padding-width-1 clearfix">
            <div class="container-fluid">
                <div class="header-top ptb-15">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-12">
                            <div class="logo logo-pading">
                                <a href="index.html"><img alt="" src="{{asset('backend/img/logo/logo.png')}}"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 col-12">
                            <div class="header-right-site">
                                <div class="default-message same-style">
                                    <p>Default welcome msg! </p>
                                </div>
                                <div class="language-currency same-style">
                                    <div class="language">
                                        <select class="select-header orderby">
                                            <option value="">Eng</option>
                                            <option value="">FRA </option>
                                            <option value="">ESP</option>
                                        </select>
                                    </div>
                                    <div class="currency">
                                        <select class="select-header orderby">
                                            <option value="">USD</option>
                                            <option value="">US </option>
                                            <option value="">EURO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="header-login">
                                    <a href="login-register.html">
                                        <span class="ion-person"></span>
                                    </a>
                                </div>
                                <div class="header-cart same-style">
                                    <button class="icon-cart">
                                        <i class="ion-bag"></i>
                                        <span class="count-style">02</span>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="{{asset('backend/img/cart/1.jpg')}}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h3><a href="#">Unscented After- <br>Shave </a></h3>
                                                    <span>$25.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#">x</a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="{{asset('backend/img/cart/2.jpg')}}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h3><a href="#">Unscented After- <br>Shave </a></h3>
                                                    <span>$25.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#">x</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Subtotal: <span>$50.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn flex">
                                            <a class="btn-style btn-hover" href="cart-page.html">view cart</a>
                                            <a class="btn-style btn-hover" href="checkout.html">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom black-bg">
                <div class="container-fluid">
                    <div class="menu-position">
                       <div class="row">
                            <div class="col-lg-8 d-none d-lg-block">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="index.html">home</a>
                                                <ul class="submenu">
                                                    <li><a href="index.html">home version 1</a></li>
                                                    <li><a href="index-2.html">home version 2</a></li>
                                                    <li><a href="index-3.html">home version 3</a></li>
                                                    <li><a href="index-4.html">home version 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">about</a></li>
                                            <li class="mega-menu-position"><a href="shop.html">shop</a>
                                                <ul class="mega-menu">
                                                    <li>
                                                        <ul>
                                                            <li><a href="shop.html"><img alt="" src="{{asset('backend/img/banner/menu-img.jpg')}}"></a></li>
                                                            <li class="mega-menu-title">WoMen</li>
                                                            <li><a href="shop.html">Bags & Purses</a></li>
                                                            <li><a href="shop.html">Beauty</a></li>
                                                            <li><a href="shop.html">Coats & Jackets</a></li>
                                                            <li><a href="shop.html">Curve & Plus Size</a></li>
                                                            <li><a href="shop.html">Denim</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li><a href="shop.html"><img alt="" src="{{asset('backend/img/banner/menu-img-2.jpg')}}"></a></li>
                                                            <li class="mega-menu-title">Men</li>
                                                            <li><a href="shop.html">Bags</a></li>
                                                            <li><a href="shop.html">Blazers</a></li>
                                                            <li><a href="shop.html">Caps & Hats</a></li>
                                                            <li><a href="shop.html">Gifts</a></li>
                                                            <li><a href="shop.html">Grooming</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li><a href="shop.html"><img alt="" src="{{asset('backend/img/banner/menu-img-3.jpg')}}"></a></li>
                                                            <li class="mega-menu-title">Accessories</li>
                                                            <li><a href="shop.html">Belts</a></li>
                                                            <li><a href="shop.html">Bow ties</a></li>
                                                            <li><a href="shop.html">Caps</a></li>
                                                            <li><a href="shop.html">Hats</a></li>
                                                            <li><a href="shop.html">Denim</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li><a href="shop.html"><img alt="" src="{{asset('backend/img/banner/menu-img-4.jpg')}}"></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">pages</a>
                                                <ul class="submenu">
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="cart-page.html">cart page</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="my-account.html">my account</a></li>
                                                    <li><a href="contact.html">contact us</a></li>
                                                    <li><a href="shop.html">shop page</a></li>
                                                    <li><a href="shop-list.html">shop list</a></li>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="shop-grid-full-wide.html">shop grid full wide</a></li>
                                                    <li><a href="shop-list-full-wide.html">shop list full wide</a></li>
                                                    <li><a href="login-register.html">logging / register</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog-left-sidebar.html">blogs</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog page</a></li>
                                                    <li><a href="blog-left-sidebar.html">blog sidebar</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="blog-details-slider.html">blog details slider</a></li>
                                                    <li><a href="blog-details-video.html">blog details video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="header-search">
                                    <form action="#" class="header-search-form">
                                        <input type="text" placeholder="Find a product">
                                        <button>
                                            <i class="ion-ios-search-strong"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="#">HOME</a>
                                                <ul>
                                                    <li><a href="index.html">home version 1</a></li>
                                                    <li><a href="index-2.html">home version 2</a></li>
                                                    <li><a href="index-3.html">home version 3</a></li>
                                                    <li><a href="index-4.html">home version 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">pages</a>
                                                <ul>
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="cart-page.html">cart page</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="contact.html">contact us</a></li>
                                                    <li><a href="contact.html">loging / register</a></li>
                                                    <li><a href="shop.html">shop page</a></li>
                                                    <li><a href="shop-list.html">shop list</a></li>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="shop-grid-full-wide.html">shop grid full wide</a></li>
                                                    <li><a href="shop-list-full-wide.html">shop list full wide</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shop</a>
                                                <ul>
                                                    <li><a href="#">WoMen</a>
                                                        <ul>
                                                            <li><a href="shop.html">Bags & Purses</a></li>
                                                            <li><a href="shop.html">Beauty</a></li>
                                                            <li><a href="shop.html">Coats & Jackets</a></li>
                                                            <li><a href="shop.html">Curve & Plus Size</a></li>
                                                            <li><a href="shop.html">Denim</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Men</a>
                                                        <ul>
                                                            <li><a href="shop.html">Bags</a></li>
                                                            <li><a href="shop.html">Blazers</a></li>
                                                            <li><a href="shop.html">Caps & Hats</a></li>
                                                            <li><a href="shop.html">Gifts</a></li>
                                                            <li><a href="shop.html">Grooming</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Accessories</a>
                                                        <ul>
                                                            <li><a href="shop.html">Belts</a></li>
                                                            <li><a href="shop.html">Bow ties</a></li>
                                                            <li><a href="shop.html">Caps</a></li>
                                                            <li><a href="shop.html">Hats</a></li>
                                                            <li><a href="shop.html">Denim</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">BLOG</a>
                                                <ul>
                                                    <li><a href="blog.html">blog page</a></li>
                                                    <li><a href="blog-left-sidebar.html">blog sidebar</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="blog-details-slider.html">blog details slider</a></li>
                                                    <li><a href="blog-details-video.html">blog details video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html"> Contact us </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="slider-area padding-width-1 ptb-20 gray-bg clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <div class="slider-active owl-carousel">
                            <div class="single-slider pt-200 pb-210 bg-img" style="background-image:url({{asset('backend/img/slider/1.jpg')}}";>
                                <div class="slider-content slider-animated-1 pl-80">
                                    <h3 class="animated">New Arrivals</h3>
                                    <h2 class="animated">Women’s <span>fashion</span></h2>
                                    <div class="slider-btn">
                                        <a class="animated" href="product-details.html">Shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slider pt-200 pb-210 bg-img" style="background-image:url({{asset('backend/img/slider/2.jpg')}}";>
                                <div class="slider-content slider-animated-2 pl-80">
                                    <h3 class="animated">New Arrivals</h3>
                                    <h2 class="animated">Women’s <span>fashion</span></h2>
                                    <div class="slider-btn">
                                        <a class="animated" href="product-details.html">Shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slider pt-200 pb-210 bg-img" style="background-image:url({{asset('backend/img/slider/1.jpg')}}";>
                                <div class="slider-content slider-animated-1 pl-80">
                                    <h3 class="animated">New Arrivals</h3>
                                    <h2 class="animated">Women’s <span>fashion</span></h2>
                                    <div class="slider-btn">
                                        <a class="animated" href="product-details.html">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="banner-style relative res-mrg-top-md res-mrg-top-small">
                            <a href="#"><img src="{{asset('backend/img/banner/1.jpg')}}" alt=""></a>
                            <div class="banner-content">
                                <h3>autumn <br>50 % <br>Off</h3>
                                <div class="banner-btn">
                                    <a class="btn-style btn-hover" href="product-details.html">shop now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area padding-width-1 gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-xl-3 col-md-6">
                        <div class="banner-wrapper banner-hover relative mb-30">
                            <a href="shop.html"><img src="{{asset('backend/img/banner/2.jpg')}}" alt=""></a>
                            <div class="banner-content-2 banner-position">
                                <h4>Jumpers & <br>Cardigans </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 col-md-6">
                        <div class="banner-wrapper banner-hover relative mb-30">
                            <a href="shop.html"><img src="{{asset('backend/img/banner/3.jpg')}}" alt=""></a>
                            <div class="banner-content-3 banner-position-2">
                                <h3>UP TO</h3>
                                <h2>45% OFF</h2>
                                <h4>Lingerie & Nightwear</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 col-md-6">
                        <div class="banner-wrapper banner-hover relative mb-30">
                            <a href="shop.html"><img src="{{asset('backend/img/banner/4.jpg')}}" alt=""></a>
                            <div class="banner-content-2 banner-position">
                                <h4>Handbags & <br>Purses </h4>
                                <h5>Up to 40% off</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 col-md-6">
                        <div class="banner-wrapper banner-hover relative mb-30">
                            <a href="shop.html"><img src="{{asset('backend/img/banner/5.jpg')}}" alt=""></a>
                            <div class="banner-content-2 banner-position">
                                <h4>Coats & <br>Jackets </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pt-45 pb-80 gray-bg">
            <div class="container">
                <div class="product-tab-list text-center mb-30 nav product-menu-mrg" role="tablist">
                    <a class="active" href="#home1" data-bs-toggle="tab">
                        <h4>Best Sellers </h4>
                    </a>
                    <a href="#home2" data-bs-toggle="tab">
                        <h4> New Products </h4>
                    </a>
                    <a href="#home3" data-bs-toggle="tab">
                        <h4>Sales Products</h4>
                    </a>
                </div>

                <div class="tab-content jump">
                    <div class="tab-pane active" id="home1">
                        <div class="row">
                            <div class="product-slider-active owl-carousel">
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$22.00 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old">$19.00 </span>
                                                        <span class="new">$17.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart"  href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Chiffon Flower Long </a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$70.45 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-4.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$19.99 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-13.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$19.99 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="home2">
                        <div class="row">
                           <div class="col-12">
                            <div class="product-slider-active owl-carousel">
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-5.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$22.00 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-6.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old">$19.00 </span>
                                                        <span class="new">$17.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-7.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Chiffon Flower Long </a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$70.45 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-8.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$19.99 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-13.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$19.99 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="home3">
                        <div class="row">
                            <div class="product-slider-active owl-carousel">
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-9.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$22.00 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-10.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="old">$19.00 </span>
                                                        <span class="new">$17.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-11.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Chiffon Flower Long </a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$70.45 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-12.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$19.99 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{asset('backend/img/product/product-13.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                        <i class="ion-star theme-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$19.99 </span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="discount-area pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-5">
                        <div class="discount-wrapper text-center">
                            <h4>New Arrivals!</h4>
                            <h2>Women Collection 30% Off <br>Autumn Fashion</h2>
                            <p>We sell not only top quality products, but give our customers a 
positive online shopping experience.</p>
                            <div class="overview-btn">
                                <a class="btn-style btn-hover" href="product-details.html">Shop now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7">
                        <div class="discount-img wow fadeInRight res-mrg-top-small">
                            <a href="#"><img alt="" src="{{asset('backend/img/banner/banner-6.jpg')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="deals-area gray-bg ptb-75">
            <div class="container">
                <div class="section-title text-center">
                    <h2>DEALS OF THE week</h2>
                </div>
                <div class="timer mb-30">
                    <div data-countdown="2024/07/01"></div>
                </div>
                <div class="row">
                    <div class="deals-slider-active owl-carousel">
                        <div class="slider-item">
                            <div class="deal-product-wrappers">
                                <div class="deal-action-img-wrapper">
                                    <div class="deal-product-action">
                                        <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Add To Cart" href="#">
                                            <i class="ion-bag"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                    <div class="deal-product-img">
                                        <a href="product-details.html"><img alt="" src="{{asset('backend/img/product/product-6.jpg')}}"></a>
                                    </div>
                                </div>
                                <div class="deal-product-content">
                                    <h4><a href="product-details.html">Pocket Long Sleeve</a></h4>
                                    <div class="product-rating">
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                    </div>
                                    <P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
                                    <div class="product-price">
                                        <span class="old">$55.00 </span>
                                        <span class="new">$45.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="deal-product-wrappers">
                                <div class="deal-action-img-wrapper">
                                    <div class="deal-product-action">
                                        <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Add To Cart" href="#">
                                            <i class="ion-bag"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                    <div class="deal-product-img">
                                        <a href="product-details.html"><img alt="" src="{{asset('backend/img/product/product-10.jpg')}}"></a>
                                    </div>
                                </div>
                                <div class="deal-product-content">
                                    <h4><a href="product-details.html">Absolute Workout Jacket</a></h4>
                                    <div class="product-rating">
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                    </div>
                                    <P>Ready made for the great outdoors, Patagonia create high-quality clothing for the all-round active. </P>
                                    <div class="product-price">
                                        <span class="old">$38.75 </span>
                                        <span class="new">$27.75</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="deal-product-wrappers">
                                <div class="deal-action-img-wrapper">
                                    <div class="deal-product-action">
                                        <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Add To Cart" href="#">
                                            <i class="ion-bag"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                    <div class="deal-product-img">
                                        <a href="product-details.html"><img alt="" src="{{asset('backend/img/product/product-11.jpg')}}"></a>
                                    </div>
                                </div>
                                <div class="deal-product-content">
                                    <h4><a href="product-details.html">Pocket Long Sleeve</a></h4>
                                    <div class="product-rating">
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                    </div>
                                    <P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
                                    <div class="product-price">
                                        <span class="old">$55.00 </span>
                                        <span class="new">$45.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="deal-product-wrappers">
                                <div class="deal-action-img-wrapper">
                                    <div class="deal-product-action">
                                        <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Add To Cart" href="#">
                                            <i class="ion-bag"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                    <div class="deal-product-img">
                                        <a href="product-details.html"><img alt="" src="{{asset('backend/img/product/product-12.jpg')}}"></a>
                                    </div>
                                </div>
                                <div class="deal-product-content">
                                    <h4><a href="product-details.html">Absolute Workout Jacket</a></h4>
                                    <div class="product-rating">
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                    </div>
                                    <P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
                                    <div class="product-price">
                                        <span class="old">$38.75 </span>
                                        <span class="new">$27.75</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="deal-product-wrappers">
                                <div class="deal-action-img-wrapper">
                                    <div class="deal-product-action">
                                        <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                            <i class="ion-ios-eye-outline"></i>
                                        </a>
                                        <a class="action-heart" title="Add To Cart" href="#">
                                            <i class="ion-bag"></i>
                                        </a>
                                        <a class="action-heart" title="Wishlist" href="#">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                            <i class="ion-stats-bars"></i>
                                        </a>
                                    </div>
                                    <div class="deal-product-img">
                                        <a href="product-details.html"><img alt="" src="{{asset('backend/img/product/product-13.jpg')}}"></a>
                                    </div>
                                </div>
                                <div class="deal-product-content">
                                    <h4><a href="product-details.html">Absolute Workout Jacket</a></h4>
                                    <div class="product-rating">
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                    </div>
                                    <P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
                                    <div class="product-price">
                                        <span class="old">$38.75 </span>
                                        <span class="new">$27.75</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-area pt-65 pb-35 black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="services-wrapper text-center mb-40">
                            <i class="ion-android-sync"></i>
                            <h4>Return & Exchange</h4>
                            <p>Committed to return the money in 30 days</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="services-wrapper text-center mb-40">
                            <i class="ion-card"></i>
                            <h4>RECIEVE GIFT CARD</h4>
                            <p>Receive gift all over order $50</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="services-wrapper text-center mb-40">
                            <i class="ion-help-buoy"></i>
                            <h4>ONLINE SUPPORT 24/7</h4>
                            <p>24/7 online support is always ready</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new-collection-testimonials-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="new-collection-wrapper">
                            <a href="#"><img src="{{asset('backend/img/banner/banner-7.jpg')}}" alt=""></a>
                            <div class="new-collection-content">
                                <h2>Accent Your <br>Style with <br>New Collection</h2>
                                <div class="new-collection-btn">
                                    <a class="btn-style" href="#">View collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="testimonials-area text-center black-bg-2 res-mrg-top-md res-mrg-top-small h-100">
                            <div class="section-title text-center">
                                <h2>testimonials</h2>
                            </div>
                            <div class="testimonial-active owl-carousel">
                                <div class="single-testimonial">
                                    <p>“ Perfect Themes and the best of all that you have many options to choose! Best Support team ever!Very fast responding and experts on their fields! Thank you very much! ”</p>
                                    <h4>Stefano  Colombarolli - CEO</h4>
                                </div>
                                <div class="single-testimonial">
                                    <p>“ Lorem ipsum dolor sit amet, consectetl adipisicing elit, sed do eiusmod tempor incididul ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud”</p>
                                    <h4>Teresa McDonald - CEO</h4>
                                </div>
                                <div class="single-testimonial">
                                    <p>“ Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et voluptas.”</p>
                                    <h4>Douglas Allen - CEO</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-area gray-bg pb-80 pt-75">
            <div class="container">
                <div class="section-title text-center mb-25">
                    <h2>FEATURED FASHION DRESS</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-active owl-carousel">
                            <div class="slider-item">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{asset('backend/img/product/product-1.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                <i class="ion-ios-eye-outline"></i>
                                            </a>
                                            <a class="action-heart" title="Wishlist" href="#">
                                                <i class="ion-ios-heart-outline"></i>
                                            </a>
                                            <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                <i class="ion-stats-bars"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                        <div class="product-price-cart-wrapper">
                                            <div class="product-rating-price-wrapper">
                                                <div class="product-rating">
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$22.00 </span>
                                                </div>
                                            </div>
                                            <div class="product-cart">
                                                <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{asset('backend/img/product/product-2.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                <i class="ion-ios-eye-outline"></i>
                                            </a>
                                            <a class="action-heart" title="Wishlist" href="#">
                                                <i class="ion-ios-heart-outline"></i>
                                            </a>
                                            <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                <i class="ion-stats-bars"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Casual Loose Hollowed</a></h4>
                                        <div class="product-price-cart-wrapper">
                                            <div class="product-rating-price-wrapper">
                                                <div class="product-rating">
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="old">$19.00 </span>
                                                    <span class="new">$17.00</span>
                                                </div>
                                            </div>
                                            <div class="product-cart">
                                                <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{asset('backend/img/product/product-3.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                <i class="ion-ios-eye-outline"></i>
                                            </a>
                                            <a class="action-heart" title="Wishlist" href="#">
                                                <i class="ion-ios-heart-outline"></i>
                                            </a>
                                            <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                <i class="ion-stats-bars"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Chiffon Flower Long </a></h4>
                                        <div class="product-price-cart-wrapper">
                                            <div class="product-rating-price-wrapper">
                                                <div class="product-rating">
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                    <i class="ion-star"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$70.45 </span>
                                                </div>
                                            </div>
                                            <div class="product-cart">
                                                <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{asset('backend/img/product/product-4.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                <i class="ion-ios-eye-outline"></i>
                                            </a>
                                            <a class="action-heart" title="Wishlist" href="#">
                                                <i class="ion-ios-heart-outline"></i>
                                            </a>
                                            <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                <i class="ion-stats-bars"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                        <div class="product-price-cart-wrapper">
                                            <div class="product-rating-price-wrapper">
                                                <div class="product-rating">
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$19.99 </span>
                                                </div>
                                            </div>
                                            <div class="product-cart">
                                                <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{asset('backend/img/product/product-13.jpg')}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-plus" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                <i class="ion-ios-eye-outline"></i>
                                            </a>
                                            <a class="action-heart" title="Wishlist" href="#">
                                                <i class="ion-ios-heart-outline"></i>
                                            </a>
                                            <a class="action-cart" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleCompare" href="#">
                                                <i class="ion-stats-bars"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Sheer Mesh Patchwork</a></h4>
                                        <div class="product-price-cart-wrapper">
                                            <div class="product-rating-price-wrapper">
                                                <div class="product-rating">
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                    <i class="ion-star theme-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$19.99 </span>
                                                </div>
                                            </div>
                                            <div class="product-cart">
                                                <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-area pt-75 pb-130">
            <div class="container">
                <div class="section-title text-center mb-75">
                    <h2>latest blogs</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="blog-wrapper">
                            <div class="blog-img">
                                <a href="blog-details.html"><img alt="" src="{{asset('backend/img/blog/blog-1.jpg')}}"></a>
                            </div>
                            <div class="blog-content">
                                <span>27 - apr - 2023</span>
                                <h3><a href="blog-details.html">14 Emerging Fashion Influencers Who Are Going to Own 2023</a></h3>
                                <div class="blog-btn">
                                    <a href="blog-details.html">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="blog-wrapper blog-mrg">
                            <div class="blog-img">
                                <a href="blog-details.html"><img alt="" src="{{asset('backend/img/blog/blog-2.jpg')}}"></a>
                            </div>
                            <div class="blog-content">
                                <span>21 - apr - 2023</span>
                                <h3><a href="blog-details.html">10 Overdone Fashion Trends That Aren’t Invited to 2023</a></h3>
                                <div class="blog-btn">
                                    <a href="blog-details.html">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area padding-width-1">
            <div class="footer-top black-bg pt-80 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-xl-3 col-md-4">
                            <div class="footer-widget mb-30">
                                <div class="footer-logo">
                                    <a href="#"><img alt="" src="{{asset('backend/img/logo/logo-2.png')}}"></a>
                                </div>
                                <div class="copyright">
                                    <p>Copyright © 2023 <a href="#">dilan</a>. <br>all rights reserved</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-xl-2 col-md-4">
                            <div class="footer-widget mb-30">
                                <div class="footer-title">
                                    <h4>INFORMATION</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">New products</a></li>
                                        <li><a href="#">Top sellers</a></li>
                                        <li><a href="#">Our stores</a></li>
                                        <li><a href="contact.html">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-xl-2 col-md-4">
                            <div class="footer-widget mb-30">
                                <div class="footer-title">
                                    <h4>MY ACCOUNT</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">My orders</a></li>
                                        <li><a href="#">My credit slips</a></li>
                                        <li><a href="#">My addresses</a></li>
                                        <li><a href="#">My personal info</a></li>
                                        <li><a href="wishlist.html">My wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-xl-2 col-md-4">
                            <div class="footer-widget mb-30">
                                <div class="footer-title">
                                    <h4>QUICK LINKS</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="login-register.html">New User</a></li>
                                        <li><a href="contact.html">Help Center</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                        <li><a href="#">Report Spam</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-3 col-md-4">
                            <div class="footer-widget mb-30">
                                <div class="footer-title">
                                    <h4>CONTACT US</h4>
                                </div>
                                <div class="footer-address">
                                    <div class="single-footer-address">
                                        <div class="footer-address-icon">
                                            <i class="ion-ios-home-outline"></i>
                                        </div>
                                        <div class="footer-address-content">
                                            <p>169-C, Technohub, Dubai Silicon.</p>
                                        </div>
                                    </div>
                                    <div class="single-footer-address">
                                        <div class="footer-address-icon">
                                            <i class="ion-ios-telephone-outline"></i>
                                        </div>
                                        <div class="footer-address-content">
                                            <p>+08 888 345 6789</p>
                                        </div>
                                    </div>
                                    <div class="single-footer-address">
                                        <div class="footer-address-icon">
                                            <i class="ion-ios-email-outline"></i>
                                        </div>
                                        <div class="footer-address-content">
                                            <p><a href="#">info@example.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom ptb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="footer-social">
                                <ul>
                                    <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li class="googleplus"><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                                    <li class="rss"><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="payment-img f-right">
                                <a href="#"><img alt="" src="{{asset('backend/img/icon-img/payment-img.png')}}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close transparent-bg border-0" data-bs-dismiss="modal" aria-label="Close">
                <span class="ion-android-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="{{asset('backend/img/quick-view/l1.jpg')}}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="{{asset('backend/img/quick-view/l2.jpg')}}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="{{asset('backend/img/quick-view/l3.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-bs-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                    <img src="{{asset('backend/img/quick-view/s1.jpg')}}" alt="">
                                </a>
                                <a href="#modal2" data-bs-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                    <img src="{{asset('backend/img/quick-view/s2.jpg')}}" alt="">
                                </a>
                                <a href="#modal3" data-bs-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                    <img src="{{asset('backend/img/quick-view/s3.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Casual Loose Hollowed</h3>
                                <div class="product-price">
                                    <span class="old">$19.00 </span>
                                    <span class="new">$17.00</span>
                                </div>
                                <div class="product-rating">
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do amt tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">XS</option>
                                            <option value="">S</option>
                                            <option value="">M</option>
                                            <option value=""> L</option>
                                            <option value="">XL</option>
                                            <option value="">XXL</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-style cr-btn" href="#"><span>add to cart</span></a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover cr-btn" href="#"><span><i class="ion-ios-heart-outline"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Compare -->
        <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close transparent-bg border-0" data-bs-dismiss="modal" aria-label="Close">
                <span class="ion-android-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-compare-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="#">
                            <div class="table-content compare-style table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <a href="#">Remove <span>x</span></a>
                                                <img src="{{asset('backend/img/quick-view/compare-1.jpg')}}" alt="">
                                                <p>Casual Loose Hollowed </p>
                                                <span>$75.99</span>
                                                <a class="compare-btn" href="cart.html">Add to cart</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="compare-title"><h4>Description </h4></td>
                                            <td class="compare-dec compare-common">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Sku </h4></td>
                                            <td class="product-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Availability  </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>In stock</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Weight   </h4></td>
                                            <td class="compare-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Dimensions   </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>N/A</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>brand   </h4></td>
                                            <td class="compare-brand compare-common">
                                                <p>HasTech</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>color   </h4></td>
                                            <td class="compare-color compare-common">
                                                <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>size    </h4></td>
                                            <td class="compare-size compare-common">
                                                <p>XS, S, M, L, XL, XXL </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"></td>
                                            <td class="compare-price compare-common">
                                                <p>$75.99 </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        
		
		<!-- all js here -->
       <script src="{{asset('backend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <script src="{{asset('backend/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('backend/js/popper.js')}}"></script>
        <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('backend/js/ajax-mail.js')}}"></script>
        <script src="{{asset('backend/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('backend/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('backend/js/plugins.js')}}"></script>
        <script src="{{asset('backend/js/main.js')}}"></script>
    </body>

<!-- Mirrored from htmldemo.net/dilan/dilan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2024 05:02:44 GMT -->
</html>
