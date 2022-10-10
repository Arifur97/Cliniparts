@extends('layouts.app')


@section('content')
<!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>Account Dashboard</h1>
                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="dashboard.html">Account Dashboard</a></li>
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

<!-- Blog Section Start -->
<div class="blog-section section mt-90 mb-50">
    <div class="container-fluid">
        <div class="row row-40">

            <div class="col-lg-3 col-12 order-lg-1">

                <!-- Blog Sidebar -->
                <div class="blog-sidebar mb-40">

                    <h4 class="title text-center"><img class="w-50 d-block m-auto" src="assets/images/account-image-placeholder.jpg">Arifur Rahman Khan</h4>

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#myprofile">My Profile Info</a></li>
                        <li><a href="orders.html">My Orders</a></li>
                        <li><a data-toggle="tab" href="#changepass">Change Password </a></li>
                        <li>
                            <a class="" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="col-lg-9 col-12 order-1 order-lg-2 mb-40 tab-content">
                <div class="row tab-pane fade in active" id="myprofile">

                    <!-- Blog Item -->
                    <div class="col-12 mb-40">
                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" id="f-name" placeholder="First Name" name="f-name">
                                </div>
                                <div class="col-md-4">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" id="l-name" placeholder="Last Name" name="l-name">
                                </div>
                                <div class="col-md-8 mt-3">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                                </div>
                                <div class="col-md-8 mt-3">
                                    <label>Phone</label>
                                    <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="phone">
                                </div>
                                <div class="col-md-8 mt-3">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" id="company" placeholder="Company Name" name="company">
                                </div>
                                <div class="col-md-8 mt-3">
                                    <label>Address 1</label>
                                    <input type="text" class="form-control" id="address1" placeholder="Address" name="address1">
                                </div>
                                <div class="col-md-8 mt-3">
                                    <label>Address 2</label>
                                    <input type="text" class="form-control" id="address2" placeholder="Address" name="address2">
                                </div>
                                <div class="col-md-5 mt-4">
                                    <input type="submit" class="btn btn-yellow" value="Update" name="btn">
                                </div>
                            </div>
                        </form>
                    </div>


                </div>

<!--                <div class="row tab-pane fade in" id="myorder">-->
<!--                    <ul>-->
<!--                        <li></li>-->
<!--                    </ul>-->

<!--                    <form action="#">-->
<!--                        <div class="cart-table table-responsive">-->
<!--                            <table class="table">-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <th class="pro-thumbnail">Order Id</th>-->
<!--                                    <th class="pro-thumbnail">Image</th>-->
<!--                                    <th class="pro-title">Product</th>-->
<!--                                    <th class="pro-price">Price</th>-->
<!--                                    <th class="pro-quantity">Quantity</th>-->
<!--                                    <th class="pro-subtotal">Total</th>-->
<!--                                    <th class="pro-remove">Status</th>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td class="pro-title"><a href="#" class="text-blue">P16052020</a></td>-->
<!--                                    <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-1.png" alt="Product"></a></td>-->
<!--                                    <td class="pro-title"><a href="#" class="text-blue">Zeon Zen 4 Pro</a></td>-->
<!--                                    <td class="pro-price"><span class="text-blue">$295.00</span></td>-->
<!--                                    <td class="pro-quantity">2</td>-->
<!--                                    <td class="pro-addtocart">$295.00</td>-->
<!--                                    <td class="pro-remove"><span class="btn btn-yellow">Pending</span></td>-->
<!--                                </tr>-->

<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->

<!--                    </form>-->
<!--                </div>-->

                <div class="row tab-pane fade in" id="changepass">

                    <!-- Blog Item -->
                    <div class="col-12 mb-40">
                        <form>
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Current Password</label>
                                    <input type="password" class="form-control" id="current-pass" placeholder="Current Password" name="current-pass">
                                </div>
                                <div class="col-md-8 mt-3">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" id="new-pass" placeholder="New Password" name="new-pass">
                                </div>
                                <div class="col-md-8 mt-3">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm-pass" placeholder="Confirm Password" name="confirm-pass">
                                </div>
                                <div class="col-md-5 mt-4">
                                    <input type="submit" class="btn btn-yellow" value="Update Password" name="btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Blog Section End -->

@endsection