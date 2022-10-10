<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/frontend/images/favicon.ico') }}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/icon-font.min.css') }}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/plugins.css') }}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('/backend/css/theme.css') }}">

</head>

<body>
    <!--Navbar-->
    <div class="row">
        <div class="col-md-3 p-0">
            <!-- MENU SIDEBAR-->
            <div class="dashboard">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('/frontend/images/logo-light.png') }}" alt="" class="img-fluid"/>
                    </a>
                </div>
                <div class="menu-sidebar">
                    <nav class="navbar-sidebar">
                        <ul>
                            <li class="sidebar-item">
                                <a href="{{ route('admin.dashboard') }}" class="@if(request()->path() == 'admin/dashboard') active @endif"><i class="icofont icofont-dashboard"></i>Dashboard</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#"><i class="icofont icofont-folder"></i>Order Products</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('admin.category') }}" class="@if(request()->path() == 'admin/category') active @endif"><i class="icofont icofont-folder"></i>Category</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('admin.products') }}"><i class="icofont icofont-folder"></i>Products</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('admin.homepage') }}"><i class="icofont icofont-folder"></i>Home Page</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#"><i class="icofont icofont-folder"></i>Who We Serve</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#"><i class="icofont icofont-folder"></i>Resources</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#"><i class="icofont icofont-folder"></i>About Us</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#"><i class="icofont icofont-folder"></i>Contact Us</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#"><i class="icofont icofont-folder"></i>Subscribe Email</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div class="col-md-9 p-0 sidebar">
            <nav class="navbar bg-light p-0">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a id="" class="nav-link" href="#" role="button">
                            <span><i class="icofont icofont-user-alt-7"></i></span>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            @yield('adminContent')
        </div>
    </div>
    
    

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
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/c9e4b84392.js"></script>
<!-- code editor -->
<script src="{{ asset('assets/backend/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/backend/ckeditor/samples/js/sample.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
    CKEDITOR.replace( 'editor1' );
</script>

<script>
    initSample();
</script>

<!-- Main JS -->
<script src="{{ asset('backend/js/theme.js') }}"></script>

</body>

</html>
