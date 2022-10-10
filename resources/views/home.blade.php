@extends('layouts.app')


@section('content')

<!-- Hero Section Start -->
<div class="hero-section section mb-30">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Hero Slider Start -->
                <div class="hero-slider hero-slider-one">
                    @foreach($slider as $row)
                    <!-- Hero Item Start -->
                    <div class="hero-item">
                        <div class="row align-items-center justify-content-between">

                            <!-- Hero Content -->
                            <div class="hero-content col">

                                {!! $row->sliderText !!}
                                <a href="{{ $row->sliderBtnUrl }}">{{ $row->sliderBtn }}</a>

                            </div>

                            <!-- Hero Image -->
                            <div class="hero-image col">
                               <img src="{{ URL::to($row->sliderImage) }}" alt="Hero Image">
                            </div>
                        
                        </div>     
                    </div>
                    <!-- Hero Item End -->
                    @endforeach

                </div><!-- Hero Slider End -->

            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->


<!-- Banner Section Start -->
<div class="banner-section section mb-60">
    <div class="container">
        <div class="row row-10">
            
            <!-- Banner -->
            <div class="col-md-8 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{ URL::to($leftBanner->left_banner) }}" alt="Banner"></a></div>
            </div>
            
            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{ URL::to($rightBanner->right_banner) }}" alt="Banner"></a></div>
            </div>
            
        </div>
    </div>
</div>
<!-- Banner Section End -->







<section class="mb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-4" style="box-shadow: 2px 2px 5px #284e64; background: #ffffff">
                <div class="col-lg-3 float-left">
                    <h2>Shop by Device</h2>
                </div>
                <div class="col-lg-9 float-left">

                    <form class="">
                        <select class="product-advance-search" searchable="Search Manufacturer">
                            <option value="" disabled selected>Manufacturer</option>
                            <option value="1">3M Healthcare</option>
                            <option value="1">3M Healthcare (formerly Arizant Healthcare, Inc.)</option>
                            <option value="2">A-M Systems</option>
                            <option value="3">A-dec</option>
                            <option value="4">AB Sciex LLC</option>
                        </select>

                        <select class="product-advance-search" searchable="Search Model">
                            <option value="" disabled selected>Model</option>
                            <option value="1">5500</option>
                            <option value="2">API 3200</option>
                            <option value="3">200 EXTERNAL FEEDING PUMP</option>
                            <option value="4">BLOOD PUMP</option>
                            <option value="5">HEPA 10</option>
                        </select>

                        <button class="btn btn-hover btn-blue btn-sm">Find</button>
                    </form>
                </div>
            </div>
<!--            <div class="col-md-1"></div>-->
        </div>
    </div>
</section>











<!-- Feature Product Section Start -->
<div class="product-section section mb-70">
    <div class="container">
        <div class="row">
            
            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="FEATURED ITEMS"><h1 class="text-yellow">FEATURED ITEMS</h1></div>
            </div><!-- Section Title End -->
            
            <!-- Product Tab Filter Start -->
            <div class="col-12 mb-30">
                <div class="product-tab-filter">
                    
                    <!-- Tab Filter Toggle -->
                    <button class="product-tab-filter-toggle">showing: <span></span><i class="icofont icofont-simple-down"></i></button>
                    
                    <!-- Product Tab List -->
                    <ul class="nav product-tab-list">
                        <li><a class="active" data-toggle="tab" href="#tab-one">All</a></li>
                        @foreach($category as $li)
                        <li><a class="" data-toggle="tab" href="#tab-one">{{ $li->category }}</a></li>
                        @endforeach
                    </ul>
                    
                </div>
            </div><!-- Product Tab Filter End -->
            
            <!-- Product Tab Content Start -->
            <div class="col-12">
                <div class="tab-content">
                    
                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade show active" id="tab-one">
                        
                        <!-- Product Slider Wrap Start -->
                        <div class="product-slider-wrap product-slider-arrow-one">
                            <!-- Product Slider Start -->
                            <div class="product-slider product-slider-4">
                                @foreach($product as $row)
                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">
                                        <!-- Image -->
                                        <div class="image">
                                            <a href="{{ URL::to('/products/product/'.$row->id) }}" class="img">
                                                <img src="{{ URL::to($row->image1) }}" alt="Product Image">
                                            </a>
                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>
                                            <!-- <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a> -->
                                        </div>
                                        <!-- Content -->
                                        <div class="content">
                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">{{ $row->category->category }}</a>
                                                <h5 class="title"><a href="{{ URL::to('/products/product/'.$row->id) }}">{{ $row->title }}</a></h5>
                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">${{ $row->price }}</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>
                                            <a href="{{ url('/products/product/add-to-cart/'.$row->id) }}" class="btn btn-warning mb-3 ml-3"><i class="ti-shopping-cart"></i>ADD TO CART</a>

                                        </div>

                                    </div><!-- Product End -->
                                </div>
                                @endforeach
                            </div><!-- Product Slider End -->
                        </div><!-- Product Slider Wrap End -->
                        
                    </div><!-- Tab Pane End --> 
                </div>
            </div><!-- Product Tab Content End -->
            
        </div>
    </div>
</div>
<!-- Feature Product Section End -->









<!-- Best Sell Product Section Start -->
<div class="product-section section mb-60">
    <div class="container">
        <div class="row">
            
            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="BEST SELLER"><h1 class="text-yellow">BEST SELLERS</h1></div>
            </div><!-- Section Title End -->
            
            <div class="col-12">
                <div class="row">
                    
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="shop.html" class="img"><img src="assets/images/product/product-5.png" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">LABORATORY</a>
                                    <h5 class="title"><a href="shop.html">Mony Handycam Z 105</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$110.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Best Sell Product Section End -->










<!-- Banner Section Start -->
<div class="banner-section section mb-90">
    <div class="container">
        <div class="row">
            
            <!-- Banner -->
            <div class="col-12">
                <div class="banner"><a href="#"><img src="{{ URL::to($poster->poster) }}" alt="Banner"></a></div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Feature Section Start -->
<div class="feature-section section mb-60">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <!-- Feature Start -->
                <div class="feature feature-shipping">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{ asset('frontend/images/icons/feature-van.png') }}" alt="Feature"></div>
                        <h4>FREE SHIPPING</h4>
                        <p>Start from $100</p>
                    </div>
                </div><!-- Feature End -->
            </div>
            
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <!-- Feature Start -->
                <div class="feature feature-guarantee">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{ asset('frontend/images/icons/feature-walet.png') }}" alt="Feature"></div>
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p>Back within 15 days</p>
                    </div>
                </div><!-- Feature End -->
            </div>
            
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <!-- Feature Start -->
                <div class="feature feature-security">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{ asset('frontend/images/icons/feature-shield.png') }}" alt="Feature"></div>
                        <h4>SECURE PAYMENTS</h4>
                        <p>Payment Security</p>
                    </div>
                </div><!-- Feature End -->
            </div>
            
        </div>
    </div>
</div>
<!-- Feature Section End -->

<!-- Best Deals Product Section End -->










<!-- New Arrival Product Section Start -->
<div class="product-section section mb-60">
    <div class="container">
        <div class="row">
            
            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="NEW ARRIVAL"><h1 class="text-yellow">NEW ARRIVAL</h1></div>
            </div><!-- Section Title End -->
            
            <div class="col-12">
                <div class="row">
                    
                    @foreach($recentProduct as $row)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="{{ URL::to('/products/product/'.$row->id) }}" class="img">
                                    <img src="{{ URL::to($row->image1) }}" alt="Product Image">
                                </a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>


                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">{{ $row->category->category }}</a>
                                    <h5 class="title"><a href="{{ URL::to('/products/product/'.$row->id) }}">{{ $row->title }}</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">${{ $row->price }}</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                </div>
                                
                                <!-- <a href="{{ url('/products/product/add-to-cart/'.$row->id) }}" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a> -->
                                <a href="{{ url('/products/product/add-to-cart/'.$row->id) }}" class="btn btn-warning mb-3 ml-3"><i class="ti-shopping-cart"></i>ADD TO CART</a>

                            </div>

                        </div><!-- Product End -->
                    </div>
                    @endforeach

                    
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- New Arrival Product Section End -->

<!-- Banner Section Start -->
<div class="banner-section section mb-60">
    <div class="container">
        <div class="row">
            
            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{ asset('frontend/images/banner/banner-4.jpg') }}" alt="Banner"></a></div>
            </div>
            
            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{ asset('frontend/images/banner/banner-5.jpg') }}" alt="Banner"></a></div>
            </div>
            
            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{ asset('frontend/images/banner/banner-6.jpg') }}" alt="Banner"></a></div>
            </div>
            
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Brands Section Start -->
<div class="brands-section section mb-90">
    <div class="container">
        <div class="row">
            
            <!-- Brand Slider Start -->
            <div class="brand-slider col">
                <div class="brand-item col"><img src="{{ asset('frontend/images/brands/brand-1.png') }}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{ asset('frontend/images/brands/brand-2.png') }}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{ asset('frontend/images/brands/brand-3.png') }}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{ asset('frontend/images/brands/brand-4.png') }}" alt="Brands"></div>
                <div class="brand-item col"><img src="{{ asset('frontend/images/brands/brand-5.png') }}" alt="Brands"></div>
            </div><!-- Brand Slider End -->
            
        </div>
    </div>
</div>
<!-- Brands Section End -->

















@endsection