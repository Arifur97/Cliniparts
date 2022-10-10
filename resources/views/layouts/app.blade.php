<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>cliniparts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/frontend/images/favicon.ico') }}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/icon-font.min.css') }}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/plugins.css') }}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/style-two.css') }}">

    <!-- Modernizer JS -->
    <script src="{{ asset('/frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

<!-- Header Section Start -->
<div class="header-section section">

    <!-- Header Top Start -->
    <div class="header-top header-top-one header-top-border pt-10 pb-10">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-5 mb-5">
                    <!-- Header Links Start -->
                    <div class="header-links">
                        <a href="track-order.html">
                            <img src="{{ asset('frontend/images/icons/car.png') }}" alt="Car Icon"> <span class="text-blue">Track your order</span
                        ></a>
                    </div><!-- Header Links End -->
                </div>

                <div class="col order-12 order-xs-12 order-lg-2 mt-5 mb-5">
                    <!-- Header Advance Search Start -->
                    <div class="header-advance-search">

                        <form action="#">
                            <div class="input ">
                                <input type="text" placeholder="Search Keyword or Item Number">
                            </div>

                            <div class="submit">
                                <button><i class="icofont icofont-search-alt-1"></i></button>
                            </div>
                        </form>

                    </div><!-- Header Advance Search End -->
                </div>

                <div class="col order-2 order-xs-2 order-lg-12 mt-5 mb-5">
                    <!-- Header Account Links Start -->
                    <div class="header-account-links text-blue">
                        <a href="{{ route('dashboard') }}"><i class="icofont icofont-user-alt-7"></i> <span>
                            @if(Auth::check())
                            {{ Auth::user()->name }}
                            @else
                                My Account
                            @endif
                        </span></a>
                        <a href="{{ route('login') }}"><i class="icofont icofont-login d-none"></i> <span>Login</span></a>
                    </div>
                    <!-- Header Account Links End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom header-bottom-one header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-5 mb-5">
                    <!-- Logo Start -->
                    <div class="header-logo">
                        <a href="index.html">
                            <!--                            <img src="assets/images/logo.png" class="h-25 w-75" alt="cliniparts">-->
                            <h1 class="text-white">Logo</h1>
                        </a>
                    </div><!-- Logo End -->
                </div>

                <div class="col order-12 order-lg-2 order-xl-2 d-none d-lg-block">
                    <!-- Main Menu Start -->
                    <div class="main-menu">
                        <nav>
                            <ul>

                                <li class="active menu-item-has-children"><a>Categories</a>
                                    <ul class="sub-menu">
                                        @foreach($category as $row)
                                        <li class="menu-item-has-children"><a href="#">{{ $row->category }}</a>
                                            <ul class="sub-menu scroll">
                                                @foreach($subcategory as $li)
                                                @if($row->id == $li->category_id)
                                                <li><a href="{{ route('subcategory.shop') }}">{{ $li->subcategory }}</a></li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="who-we-serve.html">Who we Serve</a>
                                    <ul class="sub-menu">
                                        <li><a href="integrated-delivery-network.html">Integrated Delivery Network</a></li>
                                        <li><a href="acute-care.html">Acute Care</a></li>
                                        <li><a href="surgery-centers.html">Surgery Centers</a></li>
                                        <li><a href="long-term-care.html">Long-Term Care</a></li>
                                        <li><a href="education-research.html">Education and Research</a></li>
                                        <li><a href="health-hospice.html">Home Health and Hospice</a></li>
                                        <li><a href="physician-offices.html">Physician Offices</a></li>
                                        <li><a href="assisted-living.html">Assisted Living</a></li>
                                        <li><a href="managed-care.html">Managed Care</a></li>
                                        <li><a href="independent-service.html">Independent Service Organizations</a></li>
                                    </ul>
                                </li>

                                <li><a href="browsing-history.html">Browsing History</a></li>

                                <li class="menu-item-has-children"><a href="#">Resources</a>
                                    <ul class="sub-menu">
                                        <li><a href="tech-tips.html">Tech Tips</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="news-room.html">News Room</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div><!-- Main Menu End -->
                </div>

                <div class="col order-2 order-lg-12 order-xl-12">
                    <!-- Header Shop Links Start -->
                    <div class="header-shop-links">

                        <!-- Compare -->
                        <a href="compare.html" class="header-compare"><i class="ti-control-shuffle"></i></a>
                        <!-- Wishlist -->
                        <a href="wishlist.html" class="header-wishlist"><i class="ti-heart"></i> <span class="number">3</span></a>
                        <!-- Cart -->
                        <a href="cart.html" class="header-cart"><i class="ti-shopping-cart"></i> <span class="number">{{ count((array) session('cart')) }}</span></a>

                    </div><!-- Header Shop Links End -->
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div>
    <!-- Header Bottom End -->


</div>
<!-- Header Section End -->
<!-- Mini Cart Wrap Start -->                      
<div class="mini-cart-wrap">

    <!-- Mini Cart Top -->
    <div class="mini-cart-top">    
    
        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>
        
    </div>

    <!-- Mini Cart Products -->
    <ul class="mini-cart-products">
        <?php $total = 0; $i = 0 ?>
        @if(session('cart'))
        @foreach(session('cart') as $id => $details)
        
        <li class="cart-row">
            <a class="image"><img src="{{ $details['img'] }}" alt="Product"></a>
            <div class="content">
                <a href="#" class="title">{{ $details['title'] }}</a>
                <span class="price">Price: ${{ $details['price'] }}</span>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <span class="mr-3">Qty:</span>
                    <button type="button" class="btn btn-primary qty-minus" onclick="cartQtyMinus({{ $i }})">-</button>
                    <button type="button" class="btn btn-primary-outline qty">{{ $details['qty'] }}</button>
                    <button type="button" class="btn btn-primary qty-plus"  onclick="cartQtyPlus({{ $i }})">+</button>
                </div>
            </div>
            <a href="{{ URL::to('/products/product/cart/remove-from-cart') }}" class="remove"><i class="fa fa-trash-o"></i></a>
        </li>
        <?php $i++; ?>
        @endforeach
        @endif
    </ul>

    <!-- Mini Cart Bottom -->
    <div class="mini-cart-bottom">
        <h4 class="sub-total">Total: <span class="total-cart-price">$0.00</span></h4>
        <div class="button">
            <a href="checkout.html">CHECK OUT</a>
        </div>
    </div>
</div>
<!-- Mini Cart Wrap End -->

<!-- Cart Overlay -->
<div class="cart-overlay"></div>


<!-- content section -->

@yield('content')



<!-- Subscribe Section Start -->
<div class="subscribe-section section bg-gray pt-55 pb-55">
    <div class="container">
        <div class="row align-items-center">

            <!-- Mailchimp Subscribe Content Start -->
            <div class="col-lg-6 col-12 mb-15 mt-15">
                <div class="subscribe-content">
                    <h2>SUBSCRIBE <span>OUR NEWSLETTER</span></h2>
                    <h2><span>TO GET LATEST</span> PRODUCT UPDATE</h2>
                </div>
            </div><!-- Mailchimp Subscribe Content End -->


            <!-- Mailchimp Subscribe Form Start -->
            <div class="col-lg-6 col-12 mb-15 mt-15">

				<form class="subscribe-form" action="#">
					<input type="email" autocomplete="off" placeholder="Enter your email here" />
					<button >subscribe</button>
				</form>
				<!-- mailchimp-alerts Start -->
				<div class="mailchimp-alerts text-centre">
					<div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
					<div class="mailchimp-success"></div><!-- mailchimp-success end -->
					<div class="mailchimp-error"></div><!-- mailchimp-error end -->
				</div><!-- mailchimp-alerts end -->

            </div><!-- Mailchimp Subscribe Form End -->

        </div>
    </div>
</div>
<!-- Subscribe Section End -->

<!-- Footer Section Start -->
<div class="footer-section section bg-ivory">
   
    <!-- Footer Top Section Start -->
    <div class="footer-top-section section pt-90 pb-50">
        <div class="container">
            <div class="row">
                
                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">
                       
                        <h4 class="widget-title">CONTACT INFO</h4>
                        
                        <p class="contact-info">
                            <span>Address</span>
                            You address will be here <br>
                             Lorem Ipsum text
                        </p>
                        
                        <p class="contact-info">
                            <span>Phone</span>
                            <a href="tel:01234567890">01234 567 890</a>
                        </p>
                        
                        <p class="contact-info">
                            <span>Web</span>
                            <a href="#">www.example.com</a>
                        </p>
                        
                    </div>
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">
                       
                        <h4 class="widget-title">Categories</h4>
                        
                        <ul class="link-widget">
                            <li><a href="shop-view.html">Batteries</a></li>
                            <li><a href="shop-view.html">Biomedical Parts</a></li>
                            <li><a href="shop-view.html">Cables & Sensors</a></li>
                            <li><a href="shop-view.html">Laboratory Parts</a></li>
                            <li><a href="shop-view.html">Lighting & Bulbs</a></li>
                            <li><a href="shop-view.html">Medical Imaging Parts</a></li>
                        </ul>
                        
                    </div>
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">
                       
                        <h4 class="widget-title">INFORMATION</h4>
                        
                        <ul class="link-widget">
                            <li><a href="dashboard.html">My Account</a></li>
                            <li><a href="orders.html">Orders</a></li>
                            <li><a href="orders.html">Order History</a></li>
                            <li><a href="track-order.html">Track Order</a></li>
                        </ul>
                        
                    </div>
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">
                       
                        <h4 class="widget-title">About Us</h4>

                        <ul class="link-widget">
                            <li><a href="about-us.html">Company Profile</a></li>
                            <li><a href="contact.html">Customer Support</a></li>
                            <li><a href="blog.html">Advertise with Us- COMING SOON</a></li>
                            <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                        </ul>
                        
                    </div>
                </div><!-- Footer Widget End -->
                
            </div>
            
        </div>
    </div><!-- Footer Bottom Section Start -->
   
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section section">
        <div class="container">
            <div class="row">
                
                <!-- Footer Copyright -->
                <div class="col-lg-6 col-12">
                    <div class="footer-copyright"><p>&copy; Copyright, 2020 All Rights Reserved by <a href="http://inoventivebd.com/">Inoventice BD</a></p></div>
                </div>
                
                <!-- Footer Payment Support -->
                <div class="col-lg-6 col-12">
                    <div class="footer-payments-image"><img src="{{ asset('frontend/images/payment-support.png') }}" alt="Payment Support Image"></div>
                </div>
                
            </div>
        </div>
    </div><!-- Footer Bottom Section Start -->
    
</div>
<!-- Footer Section End -->

<!-- Popup Subscribe Section Start -->
<div class="popup-subscribe-section section bg-gray pt-55 pb-55" data-modal="popup-modal">

    <!-- Popup Subscribe Wrap Start -->
    <div class="popup-subscribe-wrap">

        <button class="close-popup">X</button>

        <!-- Popup Subscribe Banner -->
        <div class="popup-subscribe-banner banner">
            <a href="#"><img src="assets/images/banner/banner-7.jpg" alt="Banner"></a>
        </div>

        <!-- Popup Subscribe Form Wrap Start -->
        <div class="popup-subscribe-form-wrap">

            <h1 class="text-blue">SUBSCRIBE <br>OUR NEWSLETTER</h1>
            <h4 class="text-blue">Get latest product update...</h4>

            <!-- Newsletter Form -->
            <form action="#" method="post" class="popup-subscribe-form validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <label for="popup_subscribe" class="d-none" class="text-blue">Subscribe to our mailing list</label>
                    <input type="email" value="" name="EMAIL" class="email" id="popup_subscribe" placeholder="Enter your email here" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="" tabindex="-1" value=""></div>
                    <button type="submit" name="subscribe" id="" class="button">subscribe</button>
                </div>
            </form>

            <p>Be the first in the by getting special deals and offers send directly to your inbox.</p>

        </div>
        <!-- Popup Subscribe Form Wrap End -->

    </div>
    <!-- Popup Subscribe Wrap End -->

</div>
<!-- Popup Subscribe Section End -->
    

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('/frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('/frontend/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('/frontend/js/plugins.js') }}"></script>
<!-- cart js -->
<script src="{{ asset('/frontend/js/cart.js') }}" async></script>
<!-- Main JS -->
<script src="{{ asset('/frontend/js/main.js') }}"></script>


</body>

</html>
