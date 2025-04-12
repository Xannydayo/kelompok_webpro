<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/icon_univ_bsi.png') }}">
    <title>tokoonline</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/slick-theme.css') }}">

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/nouislider.min.css') }}">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body></body>
    <!-- HEADER -->
    <header>
        <!-- top Header -->
        <div id="top-header">
            <div class="container">
                <div class="pull-left">
                    <span>Selamat datang di toko online</span>
                </div>
            </div>
        </div>
        <!-- /top Header -->

        <!-- header -->
        <div id="header">
            <div class="container">
                <div class="pull-left">
                    <!-- Logo -->
                    <div class="header-logo">
                        <a class="logo" href="#">
                            <img src="{{ asset('image/logo.png') }}" alt="">
                        </a>
                    </div>
                    <!-- /Logo -->

                    <!-- Search -->

                    <!-- /Search -->
                </div>
                <div class="pull-right">
                    <ul class="header-btns">
                        <!-- Cart -->
                        <li class="header-cart dropdown default-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="header-btns-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <strong class="text-uppercase">Keranjang</strong>
                            </a>
                        </li>
                        <!-- /Cart -->

                        <!-- Account -->
                        <li class="header-account dropdown default-dropdown">
                            <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                <div class="header-btns-icon">
                                    <i class="fa fa-user-o"></i>
                                </div>
                                <strong class="text-uppercase">Akun Saya<i class="fa fa-caret-down"></i></strong>
                            </div>
                            <a href="./backend/login" class="text-uppercase">Login</a>
                            <ul class="custom-menu">
                                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                                <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                                <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                                <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                                <li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
                                <li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                            </ul>
                        </li>
                        <!-- /Account -->

                        <!-- Mobile nav toggle-->
                        <li class="nav-toggle">
                            <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                        </li>
                        <!-- / Mobile nav toggle -->
                    </ul>
                </div>
            </div>
            <!-- header -->
        </div>
        <!-- container -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <div id="navigation">
        <!-- container -->
        <div class="container">
            <div id="responsive-nav">
                <!-- category nav -->
                <div class="category-nav">
                    <span class="category-header">Categories <i class="fa fa-list"></i></span>
                    <ul class="category-list">
                        <li class="dropdown side-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women’s Clothing <i class="fa fa-angle-right"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row hidden-sm hidden-xs">
                                    <div class="col-md-12">
                                        <hr>
                                        <a class="banner banner-1" href="#">
                                            <img src="./img/banner05.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h2 class="white-color">NEW COLLECTION</h2>
                                                <h3 class="white-color font-weak">HOT DEAL</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Men’s Clothing</a></li>
                        <li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Phones & Accessories <i class="fa fa-angle-right"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 hidden-sm hidden-xs">
                                        <a class="banner banner-2" href="#">
                                            <img src="./img/banner04.jpg" alt="">
                                            <div class="banner-caption">
                                                <h3 class="white-color">NEW<br>COLLECTION</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Computer & Office</a></li>
                        <li><a href="#">Consumer Electronics</a></li>
                        <li class="dropdown side-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Jewelry & Watches <i class="fa fa-angle-right"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Bags & Shoes</a></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </div>
                <!-- /category nav -->

                <!-- menu nav -->
                <div class="menu-nav">
                    <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                    <ul class="menu-list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women <i class="fa fa-caret-down"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row hidden-sm hidden-xs">
                                    <div class="col-md-12">
                                        <hr>
                                        <a class="banner banner-1" href="#">
                                            <img src="./img/banner05.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h2 class="white-color">NEW COLLECTION</h2>
                                                <h3 class="white-color font-weak">HOT DEAL</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Men <i class="fa fa-caret-down"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="hidden-sm hidden-xs">
                                            <a class="banner banner-1" href="#">
                                                <img src="./img/banner06.jpg" alt="">
                                                <div class="banner-caption text-center">
                                                    <h3 class="white-color text-uppercase">Women’s</h3>
                                                </div>
                                            </a>
                                            <hr>
                                        </div>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="hidden-sm hidden-xs">
                                            <a class="banner banner-1" href="#">
                                                <img src="./img/banner07.jpg" alt="">
                                                <div class="banner-caption text-center">
                                                    <h3 class="white-color text-uppercase">Men’s</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="hidden-sm hidden-xs">
                                            <a class="banner banner-1" href="#">
                                                <img src="./img/banner08.jpg" alt="">
                                                <div class="banner-caption text-center">
                                                    <h3 class="white-color text-uppercase">Accessories</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="hidden-sm hidden-xs">
                                            <a class="banner banner-1" href="#">
                                                <img src="./img/banner09.jpg" alt="">
                                                <div class="banner-caption text-center">
                                                    <h3 class="white-color text-uppercase">Bags</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3>
                                            </li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Sales</a></li>
                        <li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
                            <ul class="custom-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="product-page.html">Product Details</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- menu nav -->
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /NAVIGATION -->

    <!-- HOME -->
    <div id="home">
        <!-- container -->
        <div class="container">
            <!-- home wrap -->
            <div class="home-wrap">
                <!-- home slick -->
                <div id="home-slick">
                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('frontend/img/banner01.jpg') }}" alt="">
                        <div class="banner-caption text-center">
                            <h1>Bags sale</h1>
                            <h3 class="white-color font-weak">Up to 50% Discount</h3>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('frontend/img/banner02.jpg') }}" alt="">
                        <div class="banner-caption">
                            <h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('frontend/img/banner03.jpg') }}" alt="">
                        <div class="banner-caption">
                            <h1 class="white-color">New Product <span>Collection</span></h1>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                    <!-- /banner -->
                </div>
                <!-- /home slick -->
            </div>
            <!-- /home wrap -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOME -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Top Rated Product</h3>
                        <!-- widget product -->
                        <div class="product product-widget">
                            <div class="product-thumb">
                                <img src="{{ asset('frontend/img/thumb-product01.jpg') }}" alt="">
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /widget product -->

                        <!-- widget product -->
                        <div class="product product-widget">
                            <div class="product-thumb">
                                <img src="{{ asset('frontend/img/thumb-product01.jpg') }}" alt="">
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">$32.50</h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /widget product -->
                    </div>
                    <!-- /aside widget -->
                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter by Brand</h3>
                        <ul class="list-links">
                            <li><a href="#">Nike</a></li>
                            <li><a href="#">Adidas</a></li>
                            <li><a href="#">Polo</a></li>
                            <li><a href="#">Lacost</a></li>
                        </ul>
                    </div>
                    <!-- /aside widget -->
                </div>
                <!-- /ASIDE -->

                <!-- MAIN -->
                <div id="main" class="col-md-9">
                    <!-- store top filter -->
                    <!-- /store top filter -->

                    <!-- STORE -->


                    <!-- @yieldAwal -->
                    @yield('content')
                    <!-- @yieldAkhir-->
                    <!-- /STORE -->

                    <!-- store bottom filter -->

                    <!-- /store bottom filter -->
                </div>
                <!-- /MAIN -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- FOOTER -->
@include('v_layouts.footer')
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>