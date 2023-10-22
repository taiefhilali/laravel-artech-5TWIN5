<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

{{-- <link rel="stylesheet" href="{{ mix('resources/assetsback/css/app.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ Vite::asset('resources/assetsback/css/app.css') }}" /> --}}

  {{-- @vite(['resources/assetsback/css/theme/bordered-layout.min'])
  @vite(['resources/assetsback/css/colors.css'])
  @vite(['resources/assetsback/css/themes/dark-layout.css'])
  @vite(['resources/assetsback/css/themes/semi-dark-layout.css'])
  @vite(['resources/assetsback/css/core/menu/menu-types/vertical-menu.css'])
  @vite(['resources/assetsback/css/style.css'])
  @vite(['resources/assetsback/css/bootstrap.min.css'])
  @vite(['resources/assetsback/css/components.css'])
  @vite(['resources/assetsback/css/components.min.css']) --}}

  {{-- @vite(['resources/assetsback/vendors/js/vendors.min.js']) --}}
  {{-- @vite(['resources/assetsback/js/core/app-menu.js']) --}}
  @vite(['resources/assetsback/js/core/app.js'])

  {{-- @vite(['resources/assetsback/vendors/css/vendors.min.css']) --}}
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    {{-- @vite(['resources/assetsback/css/bootstrap.css'])
    @vite(['resources/assetsback/css/bootstrap-extended.css']) --}}
    {{-- @vite(['resources/assetsback/js/core/app-menu.js']) --}}
    {{-- @vite(['resources/assetsback/js/core/app-menu.min.js']) --}}
    @vite(['resources/assetsback/js/core/app.js'])
    @vite(['resources/assetsback/js/core/app.min.js'])
  


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Artech</title>
    <link rel="apple-touch-icon" href="resources/assetsback/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="resources/assetsback/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    {{-- BEGIN: Theme CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/core/menu/menu-types/vertical-menu.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assets/css/style.css')}}">
    <!-- END: Custom CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
{{-- @yield('content') --}}


    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">John Doe</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="{{Vite::asset('resources/assetsback/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="#"><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="#"><i class="me-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="#"><i class="me-50" data-feather="check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="me-50" data-feather="message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="me-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="#"><i class="me-50" data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="#"><i class="me-50" data-feather="help-circle"></i> FAQ</a>

                        {{-- <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a class="dropdown-item"><i class="me-50" data-feather="power"></i> Logout</a>

                        </form> --}}
                        <br>

                        <form action="{{ route('logout') }}" method="POST" style="display: inline-block;">
                            @csrf
                            <button type="submit" class="dropdown-item" style="background: none; border: none; padding: 10; margin: 10;">
                                <i class="me-50" data-feather="power"></i> Logout
                            </button>
                        </form>
                        
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">

        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="resources/starter-kit/ltr/vertical-menu-template/"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">ArTech</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Home">Home</span></a>
                </li>
                
             

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Carts & Orders</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/commande"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="orders">List of Orders</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/admin/carts"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="carts">List of Carts</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Products</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/admin/products"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List of Products</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/admin/createProduct"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add Product</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Catalogs</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/admin/catalogs"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List of Catalogs</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/admin/createCatalog"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add Catalog</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Events</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/admin/events"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List of Events</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Categories</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/admin/categories"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List of Categories</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/admin/categories/create"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add Category</span></a>
                        </li>
                    </ul>
                </li>
   
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay">


        </div>

        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Home</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Index
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Kick start -->
      
               
        @yield('content')
        @yield('Edit')

      

                <!--/ Kick start -->

                <!-- Page layout -->

                <!--/ Page layout -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ Vite::asset('resources/assetsback/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ Vite::asset('resources/assetsback/js/core/app-menu.js')}}"></script>
    <script src="{{ Vite::asset('resources/assetsback/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

@yield('scripts')
@yield('scriptt')


</body>
<!-- END: Body-->

</html>