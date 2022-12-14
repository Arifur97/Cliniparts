@extends('layouts.app')


@section('content')
<!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>Product Details</h1>
                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">Product Details</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-1">
            <div class="banner"><a href="#"><img src="assets/images/banner/banner-15.jpg" alt="Banner"></a></div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-3">
            <div class="banner"><a href="#"><img src="assets/images/banner/banner-14.jpg" alt="Banner"></a></div>
        </div>

    </div>
</div><!-- Page Banner Section End -->

<!-- Single Product Section Start -->
<div class="product-section section mt-90 mb-90">
    <div class="container">
        
        <div class="row mb-90">
                    
            <div class="col-lg-6 col-12 mb-50">

                <!-- Image -->
                <div class="single-product-image thumb-right">

                    <div class="tab-content">
                        <div id="single-image-1" class="tab-pane fade show active big-image-slider">
                            <div class="big-image"><img src="{{ URL::to($product->image1) }}" alt="Big Image"><a href="{{ URL::to($product->image1) }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>

                            <div class="big-image"><img src="{{ URL::to($product->image2) }}" alt="Big Image"><a href="{{ URL::to($product->image2) }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>

                            <div class="big-image"><img src="{{ URL::to($product->image3) }}" alt="Big Image"><a href="{{ URL::to($product->image3) }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                        <div id="single-image-2" class="tab-pane fade big-image-slider">
                            <div class="big-image"><img src="{{ URL::to($product->image4) }}" alt="Big Image"><a href="{{ URL::to($product->image4) }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{ URL::to($product->image3) }}" alt="Big Image"><a href="{{ URL::to($product->image3) }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{ URL::to($product->image2) }}" alt="Big Image"><a href="{{ URL::to($product->image2) }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                        <div id="single-image-3" class="tab-pane fade big-image-slider">
                            <div class="big-image"><img src="{{ URL::to($product->image3) }}" alt="Big Image"><a href="{{ URL::to($product->image3) }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{ URL::to($product->image4) }}" alt="Big Image"><a href="{{ URL::to($product->image4) }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{ URL::to($product->image2) }}" alt="Big Image"><a href="{{ URL::to($product->image2) }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                    </div>
                    
                    <div class="thumb-image-slider nav" data-vertical="true">
                        <a class="thumb-image active" data-toggle="tab" href="#single-image-1"><img src="{{ URL::to($product->image1) }}" alt="Thumbnail Image"></a>
                        <a class="thumb-image" data-toggle="tab" href="#single-image-2"><img src="{{ URL::to($product->image4) }}" alt="Thumbnail Image"></a>
                        <a class="thumb-image" data-toggle="tab" href="#single-image-3"><img src="{{ URL::to($product->image3) }}" alt="Thumbnail Image"></a>
                    </div>

                </div>

            </div>
                    
            <div class="col-lg-6 col-12 mb-50">

                <!-- Content -->
                <div class="single-product-content">

                    <!-- Category & Title -->
                    <div class="head-content">

                        <div class="category-title">
                            <a href="#" class="cat text-blue">{{ $product->category->category }}</a>
                            <h5 class="title text-blue">{{ $product->title }}</h5>
                        </div>

                        <h5 class="price text-blue">${{ $product->price }}</h5>

                    </div>

                    <div class="single-product-description">

                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <div class="desc text-blue">
                            <p>{{ $product->short_desc }}</p>
                        </div>
                        
                        <span class="availability text-blue">Availability: <span class="text-yellow">In Stock</span></span>
                        
                        <div class="quantity-colors">
                            
                            <div class="quantity">
                                <h5 class="text-blue">Quantity</h5>
                                <div class="pro-qty"><input type="text" value="1"></div>
                            </div>                            
                            
                            <div class="colors">
                                <h5 class="text-blue">Color</h5>
                                <select class="nice-select text-blue">
                                    <option>red</option>
                                    <option>black</option>
                                    <option>yellow</option>
                                    <option>grey</option>
                                </select>
                            </div>                            
                            
                        </div> 

                        <div class="actions">
                            <!-- <a href="#" class="add-to-cart" onclick="addToCart({{ $product->id }})"><i class="ti-shopping-cart"></i><span class="text-blue">ADD TO CART</span></a> -->
                            <a href="{{ url('/products/product/add-to-cart/'.$product->id) }}" class="btn btn-warning ml-3">ADD TO CART</a>

                            <div class="wishlist-compare">
                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle text-blue"></i></a>
                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart text-blue"></i></a>
                            </div>

                        </div>
                        
                        <div class="tags">
                            
                            <h5 class="text-blue">Tags:</h5>
                            <a href="#" class="text-blue">Electronic</a>
                            <a href="#" class="text-blue">Smartphone</a>
                            <a href="#" class="text-blue">Phone</a>
                            <a href="#" class="text-blue">Charger</a>
                            <a href="#" class="text-blue">Powerbank</a>
                            
                        </div>
                        
                        <div class="share">
                            
                            <h5 class="text-blue">Share: </h5>
                            <a href="#" class="text-blue"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="text-blue"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-blue"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="text-blue"><i class="fa fa-google-plus"></i></a>
                            
                        </div>

                    </div>

                </div>

            </div>
            
        </div>
        
        <div class="row">
            
            <div class="col-lg-10 col-12 ml-auto mr-auto">
                
                <ul class="single-product-tab-list nav">
                    <li><a href="#product-description" class="active" data-toggle="tab" >description</a></li>
                    <li><a href="#product-specifications" data-toggle="tab" >specifications</a></li>
                    <li><a href="#product-reviews" data-toggle="tab" >reviews</a></li>
                </ul>
                
                <div class="single-product-tab-content tab-content">
                    <div class="tab-pane fade show active" id="product-description">
                        
                        <div class="row">
                            <div class="single-product-description-content col-lg-8 col-12">
                                {!! $product->desc !!}
                            </div>
                            <div class="single-product-description-image col-lg-4 col-12">
                                <img src="{{ URL::to($product->image1) }}" alt="description">
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="product-specifications">
                        <div class="single-product-specification">
                            {!! $product->specification !!}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-reviews">
                       
                        <div class="product-ratting-wrap">
							<div class="pro-avg-ratting">
								<h4>4.5 <span>(Overall)</span></h4>
								<span>Based on 9 Comments</span>
							</div>
							<div class="ratting-list">
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span>(5)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<span>(3)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<span>(1)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<span>(0)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<span>(0)</span>
								</div>
							</div>
							<div class="rattings-wrapper">
							
								<div class="sin-rattings">
									<div class="ratting-author">
										<h3>Cristopher Lee</h3>
                                        <div class="ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
									</div>
									<p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
								</div>
								
								<div class="sin-rattings">
									<div class="ratting-author">
										<h3>Nirob Khan</h3>
                                        <div class="ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
									</div>
									<p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
								</div>
								
								<div class="sin-rattings">
									<div class="ratting-author">
										<h3>MD.ZENAUL ISLAM</h3>
                                        <div class="ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
									</div>
									<p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
								</div>
								
							</div>
							<div class="ratting-form-wrapper fix">
								<h3>Add your Comments</h3>
								<form action="#">
								    <div class="ratting-form row">
										<div class="col-12 mb-15">
											<h5>Rating:</h5>
											<div class="ratting-star fix">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="col-md-6 col-12 mb-15">
                                            <label for="name">Name:</label>
                                            <input id="name" placeholder="Name" type="text">
										</div>
										<div class="col-md-6 col-12 mb-15">
                                            <label for="email">Email:</label>
                                            <input id="email" placeholder="Email" type="text">
										</div>
										<div class="col-12 mb-15">
											<label for="your-review">Your Review:</label>
											<textarea name="review" id="your-review" placeholder="Write a review"></textarea>
										</div>
										<div class="col-12">
											<input value="add review" type="submit">
										</div>
								    </div>
								</form>
							</div>
						</div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
</div><!-- Single Product Section End -->

<!-- Related Product Section Start -->
<div class="product-section section mb-70">
    <div class="container">
        <div class="row">
            
            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="RELATED PRODUCT"><h1>RELATED PRODUCT</h1></div>
            </div><!-- Section Title End -->
            
            <!-- Product Tab Content Start -->
            <div class="col-12">
                        
                <!-- Product Slider Wrap Start -->
                <div class="product-slider-wrap product-slider-arrow-one">
                    <!-- Product Slider Start -->
                    <div class="product-slider product-slider-4">

                        <div class="col pb-20 pt-10">
                            <!-- Product Start -->
                            <div class="ee-product">

                                <!-- Image -->
                                <div class="image">

                                    <a href="single-product.html" class="img"><img src="assets/images/product/product-1.png" alt="Product Image"></a>

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

                                        <a href="#" class="cat">Laptop</a>
                                        <h5 class="title"><a href="single-product.html">Zeon Zen 4 Pro</a></h5>

                                    </div>

                                    <!-- Price & Ratting -->
                                    <div class="price-ratting">

                                        <h5 class="price">$295.00</h5>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                    </div>

                                </div>

                            </div><!-- Product End -->
                        </div>

                        <div class="col pb-20 pt-10">
                            <!-- Product Start -->
                            <div class="ee-product">

                                <!-- Image -->
                                <div class="image">

                                    <span class="label sale">sale</span>

                                    <a href="single-product.html" class="img"><img src="assets/images/product/product-2.png" alt="Product Image"></a>

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

                                        <a href="#" class="cat">Drone</a>
                                        <h5 class="title"><a href="single-product.html">Aquet Drone D 420</a></h5>

                                    </div>

                                    <!-- Price & Ratting -->
                                    <div class="price-ratting">

                                        <h5 class="price"><span class="old">$350</span>$275.00</h5>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                    </div>

                                </div>

                            </div><!-- Product End -->
                        </div>

                        <div class="col pb-20 pt-10">
                            <!-- Product Start -->
                            <div class="ee-product">

                                <!-- Image -->
                                <div class="image">

                                    <a href="single-product.html" class="img"><img src="assets/images/product/product-3.png" alt="Product Image"></a>

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

                                        <a href="#" class="cat">Games</a>
                                        <h5 class="title"><a href="single-product.html">Game Station X 22</a></h5>

                                    </div>

                                    <!-- Price & Ratting -->
                                    <div class="price-ratting">

                                        <h5 class="price">$295.00</h5>
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

                        <div class="col pb-20 pt-10">
                            <!-- Product Start -->
                            <div class="ee-product">

                                <!-- Image -->
                                <div class="image">

                                    <a href="single-product.html" class="img"><img src="assets/images/product/product-4.png" alt="Product Image"></a>

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

                                        <a href="#" class="cat">Accessories</a>
                                        <h5 class="title"><a href="single-product.html">Roxxe Headphone Z 75</a></h5>

                                    </div>

                                    <!-- Price & Ratting -->
                                    <div class="price-ratting">

                                        <h5 class="price">$110.00</h5>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>

                                    </div>

                                </div>

                            </div><!-- Product End -->
                        </div>

                        <div class="col pb-20 pt-10">
                            <!-- Product Start -->
                            <div class="ee-product">

                                <!-- Image -->
                                <div class="image">

                                    <a href="single-product.html" class="img"><img src="assets/images/product/product-5.png" alt="Product Image"></a>

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

                                        <a href="#" class="cat">Camera</a>
                                        <h5 class="title"><a href="single-product.html">Mony Handycam Z 105</a></h5>

                                    </div>

                                    <!-- Price & Ratting -->
                                    <div class="price-ratting">

                                        <h5 class="price">$110.00</h5>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                    </div>

                                </div>

                            </div><!-- Product End -->
                        </div>

                    </div><!-- Product Slider End -->
                </div><!-- Product Slider Wrap End -->
                        
            </div><!-- Product Tab Content End -->
            
        </div>
    </div>
</div><!-- Related Product Section End -->

    <!-- Brands Section Start -->
    <div class="brands-section section mb-90">
        <div class="container">
            <div class="row">

                <!-- Brand Slider Start -->
                <div class="brand-slider col">
                    <div class="brand-item col"><img src="assets/images/brands/brand-1.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="assets/images/brands/brand-2.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="assets/images/brands/brand-3.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="assets/images/brands/brand-4.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="assets/images/brands/brand-5.png" alt="Brands"></div>
                </div><!-- Brand Slider End -->

            </div>
        </div>
    </div><!-- Brands Section End -->

@endsection