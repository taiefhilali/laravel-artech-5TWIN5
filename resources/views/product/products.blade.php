<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/assetsfront/css/bootstrap.min.css'])
    @vite(['resources/assetsfront/css/font-awesome.min.css'])
    @vite(['resources/assetsfront/css/global.css'])
    @vite(['resources/assetsfront/css/index.css'])
    @vite(['resources/assetsfront/css/blog.css'])
    @vite(['resources/assetsfront/css/about.css'])
    @vite(['resources/assetsfront/css/cart.css'])
    @vite(['resources/assetsfront/css/checkout.css'])
    @vite(['resources/assetsfront/css/product.css'])
    @vite(['resources/assetsfront/js/bootstrap.bundle.min.js'])
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Art Web</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/global.css" rel="stylesheet">
	<link href="css/product.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz@9..144&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>
@include('partials.navbar')

<section id="center" class="center_o bg_gray pt-2 pb-2">
 <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-5">
     <div class="center_o1l">
	  <h2 class="mb-0">Product</h2>
	 </div>
   </div>
   <div class="col-md-7">
     <div class="center_o1r text-end">
	  <h6 class="mb-0"><a href="#">Home</a> <span class="me-2 ms-2"><i class="fa fa-caret-right"></i></span> Product</h6>
	 </div>
   </div>
  </div>
 </div>
</section>

<section id="product" class="p_4">
 <div class="container-xl">
  <div class="row product_1">
   <div class="col-md-9">
     <div class="product_1l">
      <p class="mb-0 mt-2">Showing 1–12 of 23 results</p>
	 </div>
   </div>
   <div class="col-md-3">
     <div class="product_1r">
        <select name="categories" class="form-select bg_gray col_light" required="">
			<option value="">Default Sorting</option>
			<option>Computer</option>
			<option>Business</option>
			<option>Chemistry</option>
			<option>Physics</option>
			<option>Photoshop</option>
			<option>Management</option>
			</select>
	 </div>
   </div>
  </div>
  <div class="row product_2 mt-4">
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/36.jpg')}}" class="w-100" alt="abc" >    
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Dapibus Diam</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star-o"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$17.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$19.00</span> $17.00</h6>
		</div>
	 </div>
	 </div>
   </div>
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/37.jpg')}}" class="w-100" alt="abc" >    
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Semp Porta</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star-half-o"></i>
		   <i class="fa fa-star-o"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$27.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$31.00</span> $27.00</h6>
		</div>
	 </div>
	 </div>
   </div>
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/38.jpg')}}" class="w-100" alt="abc" >    
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Lorem Nulla</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$23.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$29.00</span> $23.00</h6>
		</div>
	 </div>
	 </div>
   </div>
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/39.jpg')}}" class="w-100" alt="abc" >    
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Quis Sem</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star-half-o"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$37.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$49.00</span> $37.00</h6>
		</div>
	 </div>
	 </div>
   </div>
  </div>
  <div class="row product_2">
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/41.jpg')}}" class="w-100" alt="abc" >    
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Dapibus Diam</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star-o"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$17.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$19.00</span> $17.00</h6>
		</div>
	 </div>
	 </div>
   </div>
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/42.jpg')}}" class="w-100" alt="abc" >        
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Semp Porta</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star-half-o"></i>
		   <i class="fa fa-star-o"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$27.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$31.00</span> $27.00</h6>
		</div>
	 </div>
	 </div>
   </div>
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/43.jpg')}}" class="w-100" alt="abc" >    
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Lorem Nulla</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$23.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$29.00</span> $23.00</h6>
		</div>
	 </div>
	 </div>
   </div>
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/44.jpg')}}" class="w-100" alt="abc" >        
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Quis Sem</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star-half-o"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$37.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$49.00</span> $37.00</h6>
		</div>
	 </div>
	 </div>
   </div>
  </div>
  <div class="row product_2">
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/45.jpg')}}" class="w-100" alt="abc" >        
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Dapibus Diam</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star-o"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$17.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$19.00</span> $17.00</h6>
		</div>
	 </div>
	 </div>
   </div>
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/46.jpg')}}" class="w-100" alt="abc" >        
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Semp Porta</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star-half-o"></i>
		   <i class="fa fa-star-o"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$27.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$31.00</span> $27.00</h6>
		</div>
	 </div>
	 </div>
   </div>
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/47.jpg')}}" class="w-100" alt="abc" >        
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Lorem Nulla</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$23.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$29.00</span> $23.00</h6>
		</div>
	 </div>
	 </div>
   </div>
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="detail.html">
                    <img src="{{Vite::asset('resources/assetsfront/img/40.jpg')}}" class="w-100" alt="abc" >        
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">Quis Sem</a></h5>
		  <span class="font_12 col_yell">
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star"></i>
		   <i class="fa fa-star-half-o"></i>
		  </span>
		  <h6 class="col_dark mt-2 mb-0">$37.00</h6>
		</div>
		<div class="clearfix product_2im1i1 text-center position-absolute w-100">
		 <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span class="text-decoration-line-through me-2 col_gray">$49.00</span> $37.00</h6>
		</div>
	 </div>
	 </div>
   </div>
  </div>
  <div class="pages">
		 <div class="col-md-12">
		   <ul class="mb-0">
			<li><a  href="detail.html"><i class="fa fa-chevron-left"></i></a></li>
			<li><a class="act" href="detail.html">1</a></li>
			<li><a href="detail.html">2</a></li>
			<li><a href="detail.html">3</a></li>
			<li><a href="detail.html">4</a></li>
			<li><a href="detail.html">5</a></li>
			<li><a href="detail.html">6</a></li>
			<li><a  href="detail.html"><i class="fa fa-chevron-right"></i></a></li>
		   </ul>
		 </div>
	 </div>
 </div>
</section>

@include('partials.footer')


<script>
window.onscroll = function() {myFunction()};

var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;

function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>

</body>

</html>