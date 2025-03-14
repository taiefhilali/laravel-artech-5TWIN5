<!DOCTYPE html> <html class="loading" lang="en" data-textdirection="ltr"> <!-- BEGIN: Head--> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport"
    content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui"> <meta name="description"
    content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive
    admin template, web app"> <meta name="author" content="PIXINVENT"> <title>Register Page - Vuexy - Bootstrap HTML
    admin template</title>
<link rel="apple-touch-icon" href="{{ Vite::asset('resources/assetsback/images/ico/apple-icon-120.png')}}"> <link
    rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset('resources/assetsback/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/bootstrap-extended.css')}}"> <link
    rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/colors.css')}}"> <link
    rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/themes/dark-layout.css')}}"> <link
    rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/themes/semi-dark-layout.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{
    Vite::asset('resources/assetsback/css/core/menu/menu-types/vertical-menu.css')}}"> <link rel="stylesheet"
    type="text/css" href="{{ Vite::asset('resources/assetsback/css/plugins/forms/form-validation.css')}}"> <link
    rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assetsback/css/pages/authentication.css')}}"> <!-- END: Page
        CSS-->

    <!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/assets/css/style.css')}}"> <!-- END: Custom
    CSS--> @vite(['resources/assetsback/js/core/app.js']) @vite(['resources/assetsback/js/core/app.min.js']) </head>
<!-- END: Head-->

    <!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static " data-open="click"
data-menu="vertical-menu-modern" data-col="blank-page"> <!-- BEGIN: Content-->
<div class="app-content content "> <div class="content-overlay"></div> <div class="header-navbar-shadow"></div>
<div class="content-wrapper">
<div class="content-header row">
</div>
<div class="content-body">
<div class="auth-wrapper auth-cover">
<div class="auth-inner row m-0">
    <!-- Brand logo-->
    <a class="brand-logo" href="index.html">
    <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" height="28"> <defs> <lineargradient id="linearGradient-1" x1="100%"
        y1="10.5120544%" x2="50%" y2="89.4879456%">
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
            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14
                    L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838
                    C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251
                    112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507
                    C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122
                    0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14
                    L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507
                    C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575
                    L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2">
            </path>
            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758
                    70.5039241 58.3683556 20.7402338"></polygon>
            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0
                    83.0667527 94.1480575 130.378721 47.0740288"></polygon>
        </g>
        </g>
        </g>
    </svg>
    <h2 class="brand-text text-primary ms-1"> ArTech</h2>
    </a>
    <!-- /Brand logo-->
    <!-- Left Text-->
    <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid"
                src="{{ Vite::asset('resources/assetsback/images/pages/register-v2.svg')}}" alt="Register V2" /></div>
    </div>
    <!-- /Left Text-->
    <!-- Register-->
    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
       

            <x-guest-layout>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- UserName -->
                        <div class="mt-4">
                            <x-input-label for="username" :value="__('Username')" />

                            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                                :value="old('username')" required autofocus />

                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div>
                        <!-- phone Number -->
                        <div class="mt-4">
                            <x-input-label for="phone" :value="__('Phonenumber')" />

                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                                :value="old('phonenumber')" required autofocus />

                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-primary-button class="ml-4">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                </form>
            </x-guest-layout>
            <p class="text-center mt-2"><span>Already have an account?</span><a
                    href="auth-login-cover.html"><span>&nbsp;Sign in instead</span></a></p>
            <div class="divider my-2">
                <div class="divider-text">or</div>
            </div>
            <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="#"><i
                        data-feather="facebook"></i></a><a class="btn btn-twitter white" href="#"><i
                        data-feather="twitter"></i></a><a class="btn btn-google" href="#"><i
                        data-feather="mail"></i></a><a class="btn btn-github" href="#"><i data-feather="github"></i></a>
            </div>
        </div>
    </div>
    <!-- /Register-->
</div>
</div>
</div>
</div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{ Vite::asset('resources/assetsback/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ Vite::asset('resources/assetsback/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ Vite::asset('resources/assetsback/js/core/app-menu.js')}}"></script>
<script src="{{ Vite::asset('resources/assetsback/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ Vite::asset('resources/assetsback/js/scripts/pages/auth-register.js')}}"></script>
<!-- END: Page JS-->


<script>
    feather.replace();
</script>
</body>
<!-- END: Body-->

</html>