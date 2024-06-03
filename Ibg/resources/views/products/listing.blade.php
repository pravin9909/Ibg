<!DOCTYPE html>
<html class="no-js" lang="en">
    

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>IBG - Category</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style-min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>

    <body class="shop-page shop-left-sidebar-page">
        <!--Page Wrapper-->
        <div class="page-wrapper">
            <!--Header-->
            <header class="header d-flex align-items-center header-1 header-fixed">
                <div class="container">        
                    <div class="row">
                        <!--Logo-->
                        <div class="logo col-5 col-sm-3 col-md-3 col-lg-2 align-self-center">
                            <a class="logoImg" href="index.html"><img src="{{ asset('assets/images/logo.png') }}"></a>
                        </div>
                        <!--End Logo-->
                        <!--Menu-->
                        <div class="col-1 col-sm-1 col-md-1 col-lg-8 align-self-center d-menu-col">
                            <nav class="navigation" id="AccessibleNav">
                                <ul id="siteNav" class="site-nav medium center">
                                    <li class="lvl1 parent dropdown"><a href="#">About IBG<i class="icon anm anm-angle-down-l"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="#" class="site-nav lvl-2">Business Philosophy</a></li>
                                            <li><a href="#" class="site-nav lvl-2">CSR</a></li>
                                            <li><a href="#" class="site-nav lvl-2">Accrediations</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl1 parent dropdown">
                                        <a href="{{ route('products.listing') }}">Our Products Range <i class="icon anm anm-angle-down-l"></i></a>
                                        <ul class="dropdown">
                                            @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('products.byCategory', ['id' => $category->id]) }}" class="site-nav">{{ $category->title }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="lvl1"><a href="#">Our Customers</a></li>
                                    <li class="lvl1"><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--End Menu-->
                        <!--Right Icon-->
                        <div class="col-7 col-sm-9 col-md-9 col-lg-2 align-self-center icons-col text-right">
                            <!--Search-->
                            <div class="search-parent iconset">
                                <div class="site-search" title="Search">
                                    <a href="#;" class="search-icon clr-none" data-bs-toggle="offcanvas" data-bs-target="#search-drawer"><i class="hdr-icon icon anm anm-search-l"></i></a>
                                </div>
                                <div class="search-drawer offcanvas offcanvas-top" tabindex="-1" id="search-drawer">
                                    <div class="container">
                                        <div class="search-header d-flex-center justify-content-between mb-3">
                                            <h3 class="title m-0">What are you looking for?</h3>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="search-body">
                                            <form class="form minisearch" id="header-search" action="#" method="get">
                                                <!--Search Field-->
                                                <div class="d-flex searchField">
                                                    <div class="search-category">
                                                        <select class="rgsearch-category rounded-end-0">
                                                            <option value="0">All Categories</option>
                                                            <option value="1">- Industrial Uniforms</option>
                                                            <option value="2">- Security Uniforms</option>
                                                            <option value="3">- Corporate Uniforms</option>
                                                            <option value="4">- Graduation Gown</option>
                                                            <option value="4">- Mens Trousers</option>
                                                            <option value="4">- Safety Jackets</option>
                                                            <option value="4">- Winter Wear</option>
                                                            <option value="4">- Clothing Accessories</option>
                                                            <option value="4">- Fancy Uniforms</option>
                                                            <option value="4">- Housekeeping Dress</option>
                                                            <option value="4">- Factory Workers</option>
                                                            <option value="4">- Facility Staff Uniforms</option>
                                                            <option value="4">- Ladies Trousers</option>
                                                            <option value="4">- Official Blazers</option>
                                                            <option value="4">- Knit Shirts</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-box d-flex fl-1">
                                                        <input type="text" class="input-text border-start-0 border-end-0" placeholder="Search for products..." value="" />
                                                        <button type="submit" class="action search d-flex-justify-center btn rounded-start-0"><i class="icon anm anm-search-l"></i></button>
                                                    </div>
                                                </div>
                                                <!--End Search Field-->
                                                <!--End Search popular-->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Search-->
                          
                        </div>
                        <!--End Right Icon-->
                    </div>
                </div>
            </header>
            <!--End Header-->
            <!--Mobile Menu-->
            <div class="mobile-nav-wrapper" role="navigation">
                <div class="closemobileMenu">Close Menu <i class="icon anm anm-times-l"></i></div>
                <ul id="MobileNav" class="mobile-nav">
                    <li class="lvl1 parent dropdown"><a href="#">About IBG<i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="index.html" class="site-nav lvl-2">Our Team</a></li>
                            <li><a href="index2-footwear.html" class="site-nav lvl-2">Mission & Vision</a></li>
                            <li><a href="index3-bags.html" class="site-nav lvl-2">Area of Expertise</a></li>
                        </ul>
                    </li>
                    <li class="lvl1 parent dropdown"><a href="#">Our Products Range <i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="#" class="site-nav">T Shirts <i class="icon anm anm-angle-right-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="#" class="site-nav">Polo T Shirts</a></li>
                                    <li><a href="#" class="site-nav">Round Neck T Shirts</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="site-nav">Shirts <i class="icon anm anm-angle-right-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="#" class="site-nav">Casual Shirts</a></li>
                                    <li><a href="#" class="site-nav">Official Shirts</a></li>
                                </ul>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="lvl1"><a href="#">Our Customers</a></li>
                    <li class="lvl1"><a href="#">Contact Us</a></li>
                </ul>
               </div>
            <!--End Mobile Menu-->


            <!-- Body Container -->
            <div id="page-content"> 
                <!--Page Header-->
                <div class="page-header text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                                <div class="page-title"><h1>{{ $category->title }}</h1></div>
                                <!--Breadcrumbs-->
                                <div class="breadcrumbs"><a href="{{ route('home') }}" title="Back to the home page">Home</a><span class="main-title"><i class="icon anm anm-angle-right-l"></i>{{ $category->name }}</span></div>
                                <!--End Breadcrumbs-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Page Header-->
            
                <!--Main Content-->
                <div class="container">
                    <div class="row">
                        <!--Sidebar-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar sidebar-bg filterbar">
                            <div class="closeFilter d-block d-lg-none"><i class="icon anm anm-times-r"></i></div>
                            <div class="sidebar-tags sidebar-sticky clearfix">
                                
                                <!--Product Industries-->
                                <div class="sidebar-widget filterBox filter-widget brand-filter">
                                    <div class="widget-title"><h2>Industry</h2></div>
                                    <div class="widget-content filterDD">
                                        <ul class="clearfix">
                                            @foreach ($categories as $cat)
                                                <li><input type="checkbox" value="{{ $cat->slug }}" id="{{ $cat->slug }}"><label for="{{ $cat->slug }}"><span></span>{{ $cat->name }}</label></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
            
                                <!--Product Colors-->
                                <div class="sidebar-widget filterBox filter-widget brand-filter">
                                    <div class="widget-title"><h2>Color</h2></div>
                                    <div class="widget-content filterDD">
                                        <ul class="clearfix">
                                            @foreach ($colors as $color)
                                                <li><input type="checkbox" value="{{ $color->id }}" id="color{{ $color->id }}"><label for="color{{ $color->id }}"><span></span>{{ $color->name }}</label></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
            
                                <!--Print Type-->
                                <div class="sidebar-widget filterBox filter-widget brand-filter">
                                    <div class="widget-title"><h2>Print Type</h2></div>
                                    <div class="widget-content filterDD">
                                        <ul class="clearfix">
                                            @foreach ($brandingOptions as $brandingOption)
                                                <li><input type="checkbox" value="{{ $brandingOption->id }}" id="branding{{ $brandingOption->id }}"><label for="branding{{ $brandingOption->id }}"><span></span>{{ $brandingOption->name }}</label></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
            
                                <!--Fabric-->
                                <div class="sidebar-widget filterBox filter-widget brand-filter">
                                    <div class="widget-title"><h2>Fabric</h2></div>
                                    <div class="widget-content filterDD">
                                        <ul class="clearfix">
                                            @foreach ($fabricOptions as $fabricOption)
                                                <li><input type="checkbox" value="{{ $fabricOption->id }}" id="fabric{{ $fabricOption->id }}"><label for="fabric{{ $fabricOption->id }}"><span></span>{{ $fabricOption->name }}</label></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
            
                                <!--Gender-->
                                <div class="sidebar-widget filterBox filter-widget brand-filter">
                                    <div class="widget-title"><h2>Gender</h2></div>
                                    <div class="widget-content filterDD">
                                        <ul class="clearfix">
                                            @foreach ($genders as $gender)
                                                <li><input type="checkbox" value="{{ $gender->id }}" id="gender{{ $gender->id }}"><label for="gender{{ $gender->id }}"><span></span>{{ $gender->name }}</label></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
            
                                <!--Pattern-->
                                <div class="sidebar-widget filterBox filter-widget brand-filter">
                                    <div class="widget-title"><h2>Pattern</h2></div>
                                    <div class="widget-content filterDD">
                                        <ul class="clearfix">
                                            @foreach ($patterns as $pattern)
                                                <li><input type="checkbox" value="{{ $pattern->id }}" id="pattern{{ $pattern->id }}"><label for="pattern{{ $pattern->id }}"><span></span>{{ $pattern->name }}</label></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!--End Product Brands-->
                                
                            </div>
                        </div>
                        <!--End Sidebar-->
            
                        <!--Products-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                            <!--Toolbar-->
                            <div class="toolbar toolbar-wrapper shop-toolbar">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-2 col-md-4 col-lg-4 text-left filters-toolbar-item d-flex order-1 order-sm-0">
                                        <button type="button" class="btn btn-filter icon anm anm-sliders-hr d-inline-flex d-lg-none me-2"><span class="d-none">Filter</span></button>
                                        <div class="filters-item d-flex align-items-center">
                                            <label class="mb-0 me-2 d-none d-lg-inline-block">View as:</label>
                                            <div class="grid-options view-mode d-flex">
                                                <a class="icon-mode mode-list d-block" data-col="1"></a>
                                                <a class="icon-mode mode-grid grid-2 d-block active" data-col="2"></a>
                                                <a class="icon-mode mode-grid grid-3 d-md-block" data-col="3"></a>
                                                <a class="icon-mode mode-grid grid-4 d-lg-block" data-col="4"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center product-count order-0 order-md-1 mb-3 mb-sm-0">
                                        <span class="toolbar-product-count">Showing: {{ $products->count() }} products</span>
                                    </div>
                                    <div class="col-8 col-sm-6 col-md-4 col-lg-4 text-right filters-toolbar-item d-flex justify-content-end order-2 order-sm-2">
                                        <div class="filters-item d-flex align-items-center">
                                            <label for="ShowBy" class="mb-0 me-2 text-nowrap d-none d-sm-inline-flex">Show:</label>
                                            <select name="ShowBy" id="ShowBy" class="filters-toolbar-show">
                                                <option value="10">10</option>
                                                <option value="15" selected="selected">15</option>
                                                <option value="20">20</option>
                                                <option value="25">25</option>
                                                <option value="30">30</option>
                                            </select>
                                        </div>
                                        <div class="filters-item d-flex align-items-center ms-2 ms-lg-3">
                                            <label for="SortBy" class="mb-0 me-2 text-nowrap d-none">Sort by:</label>
                                            <select name="SortBy" id="SortBy" class="filters-toolbar-sort">
                                                <option value="featured" selected="selected">Featured</option>
                                                <option value="best-selling">Best selling</option>
                                                <option value="title-ascending">Alphabetically, A-Z</option>
                                                <option value="title-descending">Alphabetically, Z-A</option>
                                                <option value="price-ascending">Price, low to high</option>
                                                <option value="price-descending">Price, high to low</option>
                                                <option value="created-ascending">Date, old to new</option>
                                                <option value="created-descending">Date, new to old</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Toolbar-->
            
                            <!--Product Grid-->
                            <div class="grid-products grid-view-items">
                                <div class="row col-row product-options row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-2">
                                    @foreach ($products as $product)
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="{{ route('product.show', $product->id) }}" class="product-img rounded-0"><img class="rounded-0 blur-up lazyload" src="{{ asset('storage/' . $product->main_image) }}" alt="{{ $product->title }}" title="{{ $product->title }}" width="625" height="808" /></a>
                                                <!-- End Product Image -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details text-center">
                                                <!--Product Vendor-->
                                                <div class="product-vendor">{{ $category->title }}</div>
                                                <!--End Product Vendor-->
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a>
                                                </div>
                                                <!-- End Product Name -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!--End Product Grid-->
                        </div>
                        <!--End Products-->
                    </div>
                </div>
                <!--End Main Content-->
            </div>
            

            <!--Footer-->
            <div class="footer">
               
                <div class="footer-top clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Informations</h4>
                                <ul>
                                    <li><a href="#">Our Products</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Disclaimer</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Terms &amp; condition</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Hot Categories</h4>
                                <ul>
                                    <li><a href="#">Shirts</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">Trousers</a></li>
                                    <li><a href="#">Caps</a></li>
                                    <li><a href="#">Hoodies</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Customer Services</h4>
                                <ul>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="faqs-style1.html">Email Us</a></li>
                                    <li><a href="contact-style1.html">Chat with Us</a></li>
                                    <li><a href="#">Orders and Returns</a></li>
                                    <li><a href="#">Support Center</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-contact">
                                <h4 class="h4">Contact Us</h4>
                                <p class="address d-flex"><i class="icon anm anm-map-marker-al pt-1"></i> 55 Gallaxy Enque, 2568 steet, 23568 NY</p>
                                <p class="phone d-flex align-items-center"><i class="icon anm anm-phone-l"></i>  <b class="me-1 d-none">Phone:</b> <a href="tel:401234567890">(+40) 123 456 7890</a></p>
                                <p class="email d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> <b class="me-1 d-none">Email:</b> <a href="mailto:info@example.com">info@example.com</a></p>
                                <ul class="list-inline social-icons mt-3">
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>               
                    </div>
                </div>
                <div class="footer-bottom clearfix">
                    <div class="container">
                        <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">
                            <ul class="payment-icons d-flex-center mb-2 mb-md-0">
                                <li><i class="icon anm anm-cc-visa"></i></li>
                                <li><i class="icon anm anm-cc-mastercard"></i></li>
                                <li><i class="icon anm anm-cc-amex"></i></li>
                                <li><i class="icon anm anm-cc-paypal"></i></li>
                                <li><i class="icon anm anm-cc-discover"></i></li>
                                <li><i class="icon anm anm-cc-stripe"></i></li>
                                <li><i class="icon anm anm-cc-jcb"></i></li>
                            </ul>
                            <div class="copytext">&copy; 2024 IBG. All Rights Reserved.</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer-->

            <!--Scoll Top-->
            <div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
            <!--End Scoll Top-->

            <!--MiniCart Drawer-->
            <div id="minicart-drawer" class="minicart-right-drawer offcanvas offcanvas-end" tabindex="-1">
                <!--MiniCart Empty-->
                <div id="cartEmpty" class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted d-none">
                    <div class="minicart-header d-flex-center justify-content-between w-100">
                        <h4 class="fs-6">Your cart (0 Items)</h4>
                        <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></button>
                    </div>
                    <div class="cartEmpty-content mt-4">
                        <i class="icon anm anm-cart-l fs-1 text-muted"></i> 
                        <p class="my-3">No Products in the Cart</p>
                        <a href="index.html" class="btn btn-primary cart-btn">Continue shopping</a>
                    </div>
                </div>
                <!--End MiniCart Empty-->

                <!--MiniCart Content-->
                <div id="cart-drawer" class="block block-cart">
                    <div class="minicart-header">
                        <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></button>
                        <h4 class="fs-6">Your cart (2 Items)</h4>
                    </div>
                    <div class="minicart-content">
                        <ul class="m-0 clearfix">
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image rounded-0" href="product-layout1.html">
                                    <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/cart-product-img1.jpg') }}" src="{{ asset('assets/images/products/cart-product-img1.jpg') }}" alt="product" title="Product" width="120" height="170" />
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">Women Sandals</a>
                                    <div class="variant-cart my-2">Black / XL</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="price">$54.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty">
                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image rounded-0" href="product-layout1.html">
                                    <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/cart-product-img2.jpg') }}" src="{{ asset('assets/images/products/cart-product-img2.jpg') }}" alt="product" title="Product" width="120" height="170" />
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">Sleeve Round T-Shirt</a>
                                    <div class="variant-cart my-2">Yellow / M</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="price old-price">$114.00</span><span class="price">$99.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty">
                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-bottom">
                        <div class="shipinfo">
                            <div class="progress mb-2"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div></div>
                            <div class="freeShipMsg"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Only <span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span> away from <b>Free Shipping</b></div>
                            <div class="freeShipMsg d-none"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Congrats! You are eligible for <b>Free Shipping</b></div>
                        </div>
                        <div class="subtotal clearfix my-3">
                            <div class="totalInfo clearfix mb-1 d-none"><span>Shipping:</span><span class="item product-price">$10.00</span></div>
                            <div class="totalInfo clearfix mb-1 d-none"><span>Tax:</span><span class="item product-price">$0.00</span></div>
                            <div class="totalInfo clearfix"><span>Total:</span><span class="item product-price">$163.00</span></div>

                        </div>
                        <div class="agree-check customCheckbox">
                            <input id="prTearm" name="tearm" type="checkbox" value="tearm" required />
                            <label for="prTearm"> I agree with the </label><a href="#" class="ms-1 text-link">Terms &amp; conditions</a>
                        </div>
                        <div class="minicart-action d-flex mt-3">
                            <a href="checkout-style1.html" class="proceed-to-checkout btn btn-primary w-50 me-1">Check Out</a>
                            <a href="cart-style1.html" class="cart-btn btn btn-secondary w-50 ms-1">View Cart</a>
                        </div>
                    </div>
                </div>
                <!--MiniCart Content-->
            </div>
            <!--End MiniCart Drawer-->

            <!-- Product Quickshop Modal-->
            <div class="quickshop-modal modal fade" id="quickshop_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <form method="post" action="#" id="product-form-quickshop" class="product-form align-items-center">
                                <!-- Product Info -->
                                <div class="row g-0 item mb-3">
                                    <a class="col-4 product-image" href="product-layout1.html"><img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/addtocart-modal.jpg') }}" src="{{ asset('assets/images/products/addtocart-modal.jpg') }}" alt="Product" title="Product" width="625" height="800" /></a>
                                    <div class="col-8 product-details">
                                        <div class="product-variant ps-3">

                                            <a class="product-title" href="product-layout1.html">Weave Hoodie Sweatshirt</a>
                                            <div class="priceRow mt-2 mb-3">
                                                <div class="product-price m-0"><span class="old-price">$114.00</span><span class="price">$99.00</span></div>
                                            </div>
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                                <input type="text" name="quantity" value="1" class="qty">
                                                <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Info -->
                                <!-- Swatches Color -->
                                <div class="variants-clr swatches-image clearfix mb-3 swatch-0 option1" data-option-index="0">
                                    <label class="label d-flex justify-content-center">Color:<span class="slVariant ms-1 fw-bold">Black</span></label>
                                    <ul class="swatches d-flex-justify-center pt-1 clearfix">
                                        <li class="swatch large radius available active"><img src="{{ asset('assets/images/products/swatches/blue-red.jpg') }}" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                        <li class="swatch large radius available"><img src="{{ asset('assets/images/products/swatches/blue-red.jpg') }}" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Black" /></li>
                                        <li class="swatch large radius available"><img src="{{ asset('assets/images/products/swatches/blue-red.jpg') }}" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                        <li class="swatch large radius available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                        <li class="swatch large radius soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                                    </ul>
                                </div>
                                <!-- End Swatches Color -->
                                <!-- Swatches Size -->
                                <div class="variants-size swatches-size clearfix mb-4 swatch-1 option2" data-option-index="1">
                                    <label class="label d-flex justify-content-center">Size:<span class="slVariant ms-1 fw-bold">S</span></label>
                                    <ul class="size-swatches d-flex-justify-center pt-1 clearfix">
                                        <li class="swatch large radius soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                        <li class="swatch large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                    </ul>
                                </div>
                                <!-- End Swatches Size -->
                                <!-- Product Action -->
                                <div class="product-form-submit d-flex-justify-center">
                                    <button type="submit" name="add" class="btn product-cart-submit me-2"><span>Add to cart</span></button>
                                    <button type="submit" name="sold" class="btn btn-secondary product-sold-out d-none" disabled="disabled">Sold out</button>
                                    <button type="submit" name="buy" class="btn btn-secondary proceed-to-checkout">Buy it now</button>
                                </div>
                                <!-- End Product Action -->
                                <div class="text-center mt-3"><a class="text-link" href="product-layout1.html">View More Details</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Quickshop Modal -->

            <!-- Product Addtocart Modal-->
            <div class="addtocart-modal modal fade" id="addtocart_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <form method="post" action="#" id="product-form-addtocart" class="product-form align-items-center">
                                <h3 class="title mb-3 text-success text-center">Added to cart Successfully!</h3>
                                <div class="row d-flex-center text-center">
                                    <div class="col-md-6">
                                        <!-- Product Image -->
                                        <a class="product-image" href="product-layout1.html"><img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/addtocart-modal.jpg') }}" src="{{ asset('assets/images/products/addtocart-modal.jpg') }}" alt="Product" title="Product" width="625" height="800" /></a>
                                        <!-- End Product Image -->
                                    </div>
                                    <div class="col-md-6 mt-3 mt-md-0">
                                        <!-- Product Info -->
                                        <div class="product-details">

                                            <a class="product-title" href="product-layout1.html">Cuff Beanie Cap</a>
                                            <p class="product-clr my-2 text-muted">Black / XL</p>
                                        </div>
                                        <div class="addcart-total rounded-5">
                                            <p class="product-items mb-2">There are <strong>1</strong> items in your cart</p>
                                            <p class="d-flex-justify-center">Total: <span class="price">$198.00</span></p>
                                        </div>
                                        <!-- End Product Info -->
                                        <!-- Product Action -->
                                        <div class="product-form-submit d-flex-justify-center">
                                            <a href="#" class="btn btn-outline-primary product-continue w-100">Continue Shopping</a>
                                            <a href="cart-style1.html" class="btn btn-secondary product-viewcart w-100 my-2 my-md-3">View Cart</a>
                                            <a href="checkout-style1.html" class="btn btn-primary product-checkout w-100">Proceed to checkout</a>
                                        </div>
                                        <!-- End Product Action -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Addtocart Modal -->

            <!-- Product Quickview Modal-->
            <div class="quickview-modal modal fade" id="quickview_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                                    <!-- Model Thumbnail -->
                                    <div id="quickView" class="carousel slide">
                                        <!-- Image Slide carousel items -->
                                        <div class="carousel-inner">
                                            <div class="item carousel-item active" data-bs-slide-number="0">
                                                <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2.jpg') }}" src="{{ asset('assets/images/products/product2.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="1">
                                                <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2-1.jpg') }}" src="{{ asset('assets/images/products/product2-1.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="2">
                                                <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2-2.jpg') }}" src="{{ asset('assets/images/products/product2-2.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="3">
                                                <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2-3.jpg') }}" src="{{ asset('assets/images/products/product2-3.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="4">
                                                <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2-4.jpg') }}" src="{{ asset('assets/images/products/product2-4.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="5">
                                                <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2-5.jpg') }}" src="{{ asset('assets/images/products/product2-5.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                        </div>
                                        <!-- End Image Slide carousel items -->
                                        <!-- Thumbnail image -->
                                        <div class="model-thumbnail-img">
                                            <!-- Thumbnail slide -->
                                            <div class="carousel-indicators list-inline">
                                                <div class="list-inline-item active" id="carousel-selector-0" data-bs-slide-to="0" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2.jpg') }}" src="{{ asset('assets/images/products/product2.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2-1.jpg') }}" src="{{ asset('assets/images/products/product2-1.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2-2.jpg') }}" src="{{ asset('assets/images/products/product2-2.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2-3.jpg') }}" src="{{ asset('assets/images/products/product2-3.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2-4.jpg') }}" src="{{ asset('assets/images/products/product2-4.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-5" data-bs-slide-to="5" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product2-5.jpg') }}" src="{{ asset('assets/images/products/product2-5.jpg') }}" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                            </div>
                                            <!-- End Thumbnail slide -->
                                            <!-- Carousel arrow button -->
                                            <a class="carousel-control-prev carousel-arrow rounded-1" href="#quickView" data-bs-target="#quickView" data-bs-slide="prev"><i class="icon anm anm-angle-left-r"></i></a>
                                            <a class="carousel-control-next carousel-arrow rounded-1" href="#quickView" data-bs-target="#quickView" data-bs-slide="next"><i class="icon anm anm-angle-right-r"></i></a>
                                            <!-- End Carousel arrow button -->
                                        </div>
                                        <!-- End Thumbnail image -->
                                    </div>
                                    <!-- End Model Thumbnail -->
                                    <div class="text-center mt-3"><a href="product-layout1.html" class="text-link">View More Details</a></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="product-arrow d-flex justify-content-between">
                                        <h2 class="product-title">Product Quick View Popup</h2>
                                    </div>
                                    <div class="product-review d-flex mt-0 mb-2">
                                        <div class="rating"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></div>
                                        <div class="reviews ms-2"><a href="#">6 Reviews</a></div>
                                    </div>
                                    <div class="product-info">
                                        <p class="product-vendor">Vendor:<span class="text"><a href="#">HVL</a></span></p>  
                                        <p class="product-sku">SKU:<span class="text">RF104</span></p>
                                    </div>
                                    <div class="pro-stockLbl my-2">
                                        <span class="d-flex-center stockLbl instock d-none"><span> In stock</span></span>
                                        <span class="d-flex-center stockLbl preorder d-none"><span> Pre-order Now</span></span>
                                        <span class="d-flex-center stockLbl outstock d-none"><span>Sold out</span></span>
                                    </div>
                                    <div class="product-price d-flex-center my-3">
                                        <span class="price old-price">$135.00</span><span class="price">$129.00</span>
                                    </div>
                                    <div class="sort-description">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</div>
                                    <form method="post" action="#" id="product_form--option" class="product-form">
                                        <div class="product-options d-flex-wrap">
                                            <div class="product-item swatches-image w-100 mb-3 swatch-0 option1" data-option-index="0">
                                                <label class="label d-flex align-items-center">Color:<span class="slVariant ms-1 fw-bold">Blue</span></label>
                                                <ul class="variants-clr swatches d-flex-center pt-1 clearfix">
                                                    <li class="swatch large radius available blue"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue"></span></li>
                                                    <li class="swatch large radius available black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Black"></span></li>
                                                    <li class="swatch large radius available pink"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink"></span></li>
                                                    <li class="swatch large radius available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                                    <li class="swatch large radius soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                                                </ul>
                                            </div>
                                            <div class="product-item swatches-size w-100 mb-3 swatch-1 option2" data-option-index="1">
                                                <label class="label d-flex align-items-center">Size:<span class="slVariant ms-1 fw-bold">S</span></label>
                                                <ul class="variants-size size-swatches d-flex-center pt-1 clearfix">
                                                    <li class="swatch large radius soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                                    <li class="swatch large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                                </ul>
                                            </div>
                                            <div class="product-action d-flex-wrap w-100 pt-1 mb-3 clearfix">
                                                <div class="quantity">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-l" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>                                
                                                <div class="addtocart ms-3 fl-1">
                                                    <button type="submit" name="add" class="btn product-cart-submit w-100"><span>Add to cart</span></button>
                                                    <button type="submit" name="sold" class="btn btn-secondary product-sold-out w-100 d-none" disabled="disabled"><span>Sold out</span></button>
                                                    <button type="submit" name="buy" class="btn btn-secondary proceed-to-checkout w-100 d-none"><span>Buy it now</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="wishlist-btn d-flex-center">
                                        <a class="add-wishlist d-flex-center me-3" href="wishlist-style1.html" title="Add to Wishlist"><i class="icon anm anm-heart-l me-1"></i> <span>Add to Wishlist</span></a>
                                        <a class="add-compare d-flex-center" href="compare-style1.html" title="Add to Compare"><i class="icon anm anm-random-r me-2"></i> <span>Add to Compare</span></a>
                                    </div>
                                    <!-- Social Sharing -->
                                    <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                                        <span class="sharing-lbl">Share :</span>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon anm anm-facebook-f"></i><span class="share-title d-none">Facebook</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon anm anm-twitter"></i><span class="share-title d-none">Tweet</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon anm anm-pinterest-p"></i> <span class="share-title d-none">Pin it</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i class="icon anm anm-linkedin-in"></i><span class="share-title d-none">Instagram</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i class="icon anm anm-envelope-l"></i><span class="share-title d-none">WhatsApp</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon anm anm-whatsapp"></i><span class="share-title d-none">Email</span></a>
                                    </div>
                                    <!-- End Social Sharing -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Product Quickview Modal-->


            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="{{ asset('assets/js/plugins2.js') }}"></script>
            <!-- Main JS -->
            <script src="{{ asset('assets/js/main.js') }}"></script>

        </div>
        <!--End Page Wrapper-->
    </body>
</html>