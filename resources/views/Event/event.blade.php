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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Art Web</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/global.css" rel="stylesheet">
	<link href="css/blog.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz@9..144&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>
<section id="header">
<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container-xl">
    <a class="navbar-brand fs-2 p-0 fw-bold text-white" href="index.html"><i class="fa fa-pencil col_pink me-1 align-middle"></i> art <span class="col_pink span_1">WEB</span> <br> <span class="font_12 span_2">DIGITAL ART</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-0 ms-auto">
	    
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.html">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="about.html">About </a>
        </li>
		
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="product.html"> Product</a></li>
            <li><a class="dropdown-item border-0" href="detail.html"> Product Detail</a></li>
          </ul>
        </li>
		
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Events
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="events"> Events</a></li>
            <li><a class="dropdown-item border-0" href="eventdetails"> Event Details</a></li>
          </ul>
        </li>
		
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cart.html"> Shopping Cart</a></li>
            <li><a class="dropdown-item border-0" href="checkout.html"> Checkout</a></li>
          </ul>
        </li>
				
		<li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
		
      </ul>
    </div>
  </div>
</nav>
</section>

<section id="center" class="center_o bg_gray pt-2 pb-2">
 <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-5">
     <div class="center_o1l">
	  <h2 class="mb-0">Blog</h2>
	 </div>
   </div>
   <div class="col-md-7">
     <div class="center_o1r text-end">
	  <h6 class="mb-0"><a href="#">Home</a> <span class="me-2 ms-2"><i class="fa fa-caret-right"></i></span> Blog</h6>
	 </div>
   </div>
  </div>
 </div>
</section>

<section id="blog" class="p_4">
 <div class="container-xl">
   <div class="blog_1 row">
    <div class="col-md-3">
	 <div class="blog_1l">
	   <div class="blog_1l1 bg_border p-3">
	    <hr class="line_1 mt-0">
	    <h5 class="mb-4">ARCHIVES</h5>
		<h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> July 2019 <span class="pull-right">(12)</span></a></h6>
		<hr>
		<h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> May 2019 <span class="pull-right">(15)</span></a></h6>
		<hr>
		<h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Sept 2019 <span class="pull-right">(10)</span></a></h6>
		<hr>
		<h6 class="font_14 mb-0"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Jan 2019 <span class="pull-right">(14)</span></a></h6>
	   </div>
	   <div class="blog_1l1 bg_border p-3 mt-4">
	    <hr class="line_1 mt-0">
	    <h5 class="mb-3">RECENT POSTS</h5>
		<div class="blog_1l1i row">
		 <div class="col-md-2 pe-0 col-2">
		  <div class="blog_1l1il">
		   <span class="font_8"><i class="fa fa-circle-o me-1 col_pink"></i></span>
		  </div>
		 </div>
		 <div class="col-md-10 ps-0 col-10">
		  <div class="blog_1l1ir">
		   <p class="font_14 mb-1"><a href="blog_detail.html">Integer at diam gravida fringilla Nibh preti purus</a></p>
		   <h6 class="font_14 mb-0">June 18, 2015</h6>
		  </div>
		 </div>
		</div><hr>
		<div class="blog_1l1i row">
		 <div class="col-md-2 pe-0 col-2">
		  <div class="blog_1l1il">
		   <span class="font_8"><i class="fa fa-circle-o me-1 col_pink"></i></span>
		  </div>
		 </div>
		 <div class="col-md-10 ps-0 col-10">
		  <div class="blog_1l1ir">
		   <p class="font_14 mb-1"><a href="blog_detail.html">Donec quis ex vel tincidunt</a></p>
		   <h6 class="font_14 mb-0">June 18, 2015</h6>
		  </div>
		 </div>
		</div><hr>
		<div class="blog_1l1i row">
		 <div class="col-md-2 pe-0 col-2">
		  <div class="blog_1l1il">
		   <span class="font_8"><i class="fa fa-circle-o me-1 col_pink"></i></span>
		  </div>
		 </div>
		 <div class="col-md-10 ps-0 col-10">
		  <div class="blog_1l1ir">
		   <p class="font_14 mb-1"><a href="blog_detail.html">Integer at diam gravida fringilla Nibh preti purus</a></p>
		   <h6 class="font_14 mb-0">June 18, 2015</h6>
		  </div>
		 </div>
		</div>
		
	   </div>
	   <div class="blog_1l1 bg_border p-3 mt-4">
	    <hr class="line_1 mt-0">
	    <h5 class="mb-4">CATEGORIES</h5>
		<h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Audio <span class="pull-right">(12)</span></a></h6>
		<hr>
		<h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Magazine <span class="pull-right">(03)</span></a></h6>
		<hr>
		<h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> News <span class="pull-right">(08)</span></a></h6>
		<hr>
		<h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Photoshop <span class="pull-right">(12)</span></a></h6>
		<hr>
		<h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Technical <span class="pull-right">(07)</span></a></h6>
		<hr>
		<h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Uncategorized <span class="pull-right">(09)</span></a></h6>
		<hr>
		<h6 class="font_14 mb-0"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Video <span class="pull-right">(04)</span></a></h6>
	   </div>
	   <div class="blog_1l1 bg_border p-3 mt-4">
	    <hr class="line_1 mt-0">
	    <h5 class="mb-4">Tags</h5>
		<ul class="mb-0">
	    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Analyze</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Audio</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Blog</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Business</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Creative</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Design</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Experiment</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">News</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Expertize</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Express</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Share</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Sustain</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Video</a></li>
		<li class="d-inline-block"><a class="d-block" href="blog_detail.html">Youtube</a></li>
	   </ul>
	   </div>
	 </div>
	</div>
	<div class="col-md-9">
	 <div class="blog_1r">
	  <div class="blog_1ri row">
	   <div class="col-md-7">
	    <div class="blog_1ril clearfix position-relative">
		 <div class="blog_1ril1 clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img src="{{Vite::asset('resources/assetsfront/img/18.jpg')}}" class="w-100" alt="abc"></a>
					<a href="blog_detail.html"><img src="img/18.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		 </div>
		 <div class="blog_1ril2 w-100 clearfix position-absolute  text-end">
		   <span class="d-inline-block fs-2 bg-white col_dark"><i class="fa fa-edit"></i></span>
		 </div>
		</div>
	   </div>
	   <div class="col-md-5">
	    <div class="blog_1rir ps-4 pe-3">
		  <h5 class="mb-4"><a href="blog_detail.html">INTEGER AT DIAM GRAVIDA FRINGILLA NIBH PRETI PURUS</a></h5>
		  <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus pellentesque, mi mi tempor enim, sit amet interdum felis nibh a leo....</p>
		  <h6 class="font_14 mb-0 mt-4"><a class="button p-3 pt-2 pb-2" href="blog_detail.html">READ MORE</a></h6>
		</div>
	   </div>
	  </div>
	  <div class="blog_1ri row mt-4">
	   <div class="col-md-7">
	    <div class="blog_1ril clearfix position-relative">
		 <div class="blog_1ril1 clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img src="{{Vite::asset('resources/assetsfront/img/19.jpg')}}"class="w-100" alt="abc"></a>

					<a href="blog_detail.html"><img src="img/19.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		 </div>
		 <div class="blog_1ril2 w-100 clearfix position-absolute  text-end">
		   <span class="d-inline-block fs-2 bg-white col_dark"><i class="fa fa-edit"></i></span>
		 </div>
		</div>
	   </div>
	   <div class="col-md-5">
	    <div class="blog_1rir ps-4 pe-3">
		  <h5 class="mb-4"><a href="blog_detail.html">INTEGER AT DIAM GRAVIDA FRINGILLA NIBH PRETI PURUS</a></h5>
		  <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus pellentesque, mi mi tempor enim, sit amet interdum felis nibh a leo....</p>
		  <h6 class="font_14 mb-0 mt-4"><a class="button p-3 pt-2 pb-2" href="blog_detail.html">READ MORE</a></h6>
		</div>
	   </div>
	  </div>
	  <div class="blog_1ri row mt-4">
	   <div class="col-md-7">
	    <div class="blog_1ril clearfix position-relative">
		 <div class="blog_1ril1 clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img  src="{{Vite::asset('resources/assetsfront/img/20.jpg')}}" class="w-100" alt="abc"></a>

					<a href="blog_detail.html"><img src="img/20.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		 </div>
		 <div class="blog_1ril2 w-100 clearfix position-absolute  text-end">
		   <span class="d-inline-block fs-2 bg-white col_dark"><i class="fa fa-edit"></i></span>
		 </div>
		</div>
	   </div>
	   <div class="col-md-5">
	    <div class="blog_1rir ps-4 pe-3">
		  <h5 class="mb-4"><a href="blog_detail.html">INTEGER AT DIAM GRAVIDA FRINGILLA NIBH PRETI PURUS</a></h5>
		  <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus pellentesque, mi mi tempor enim, sit amet interdum felis nibh a leo....</p>
		  <h6 class="font_14 mb-0 mt-4"><a class="button p-3 pt-2 pb-2" href="blog_detail.html">READ MORE</a></h6>
		</div>
	   </div>
	  </div>
	  <div class="blog_1ri row mt-4">
	   <div class="col-md-7">
	    <div class="blog_1ril clearfix position-relative">
		 <div class="blog_1ril1 clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img src="{{Vite::asset('resources/assetsfront/img/21.jpg')}}"class="w-100" alt="abc"></a>
					<a href="blog_detail.html"><img src="img/21.jpg" class="w-100" alt="abc"></a>

				  </figure>
			  </div>
		 </div>
		 <div class="blog_1ril2 w-100 clearfix position-absolute  text-end">
		   <span class="d-inline-block fs-2 bg-white col_dark"><i class="fa fa-edit"></i></span>
		 </div>
		</div>
	   </div>
	   <div class="col-md-5">
	    <div class="blog_1rir ps-4 pe-3">
		  <h5 class="mb-4"><a href="blog_detail.html">INTEGER AT DIAM GRAVIDA FRINGILLA NIBH PRETI PURUS</a></h5>
		  <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus pellentesque, mi mi tempor enim, sit amet interdum felis nibh a leo....</p>
		  <h6 class="font_14 mb-0 mt-4"><a class="button p-3 pt-2 pb-2" href="blog_detail.html">READ MORE</a></h6>
		</div>
	   </div>
	  </div>
	  <div class="blog_1ri row mt-4">
	   <div class="col-md-7">
	    <div class="blog_1ril clearfix position-relative">
		 <div class="blog_1ril1 clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img  src="{{Vite::asset('resources/assetsfront/img/16.jpg')}}" class="w-100" alt="abc"></a>

				  </figure>
			  </div>
		 </div>
		 <div class="blog_1ril2 w-100 clearfix position-absolute  text-end">
		   <span class="d-inline-block fs-2 bg-white col_dark"><i class="fa fa-edit"></i></span>
		 </div>
		</div>
	   </div>
	   <div class="col-md-5">
	    <div class="blog_1rir ps-4 pe-3">
		  <h5 class="mb-4"><a href="blog_detail.html">INTEGER AT DIAM GRAVIDA FRINGILLA NIBH PRETI PURUS</a></h5>
		  <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus pellentesque, mi mi tempor enim, sit amet interdum felis nibh a leo....</p>
		  <h6 class="font_14 mb-0 mt-4"><a class="button p-3 pt-2 pb-2" href="blog_detail.html">READ MORE</a></h6>
		</div>
	   </div>
	  </div>
	  <div class="pages">
		 <div class="col-md-12">
		   <ul class="mb-0">
			<li><a href="blog_detail.html"><i class="fa fa-chevron-left"></i></a></li>
			<li><a class="act" href="blog_detail.html">1</a></li>
			<li><a href="blog_detail.html">2</a></li>
			<li><a href="blog_detail.html">3</a></li>
			<li><a href="blog_detail.html">4</a></li>
			<li><a href="blog_detail.html">5</a></li>
			<li><a href="blog_detail.html">6</a></li>
			<li><a href="blog_detail.html"><i class="fa fa-chevron-right"></i></a></li>
		   </ul>
		 </div>
	 </div>
	 </div>
	</div>
   </div>
 </div>
</section>

<section id="footer" class="pt-3 pb-3">
 <div class="container-fluid">
   <div class="row footer_1">
    <div class="col-md-3">
	 <div class="footer_1i">
	  <hr class="line_1">
	  <h5 class="mb-3">ABOUT</h5>
	  <p>Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus. Proin semper suscipit magna, nec imperdiet lacus semper vitae. Sed hendrerit enim non justo posuere placerat eget purus mauris.</p>
	  <p>Etiam facilisis eu nisi scelerisque faucibus. Proin semper suscipit magna, nec imperdiet lacus semper.</p>
	 </div>
	</div>
	<div class="col-md-3">
	 <div class="footer_1i">
	  <hr class="line_1">
	  <h5 class="mb-3">RECENT WORKS</h5>
	  <div class="footer_1i1 row">
	   <div class="col-md-4 col-4 p-0">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="{{Vite::asset('resources/assetsfront/img/30.jpg')}}" class="w-100" alt="abc"></a>

				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-4 col-4 p-0">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="{{Vite::asset('resources/assetsfront/img/31.jpg')}}" class="w-100" alt="abc"></a>

				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-4 col-4 p-0">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="{{Vite::asset('resources/assetsfront/img/32.jpg')}}" class="w-100" alt="abc"></a>

				  </figure>
			  </div>
		</div>
	   </div>
	  </div>
	  <div class="footer_1i1 row">
	   <div class="col-md-4 col-4 p-0">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="{{Vite::asset('resources/assetsfront/img/33.jpg')}}" class="w-100" alt="abc"></a>

				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-4 col-4 p-0">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="{{Vite::asset('resources/assetsfront/img/34.jpg')}}" class="w-100" alt="abc"></a>

				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-4 col-4 p-0">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="{{Vite::asset('resources/assetsfront/img/35.jpg')}}"class="w-100" alt="abc"></a>

				  </figure>
			  </div>
		</div>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-md-3">
	 <div class="footer_1i">
	  <hr class="line_1">
	  <h5 class="mb-3">TAG CLOUD</h5>
	   <ul class="mb-0">
	    <li class="d-inline-block"><a class="d-block" href="#">Analyze</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Audio</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Blog</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Business</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Creative</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Design</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Experiment</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">News</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Expertize</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Express</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Share</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Sustain</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Video</a></li>
		<li class="d-inline-block"><a class="d-block" href="#">Youtube</a></li>
	   </ul>
	 </div>
	</div>
	<div class="col-md-3">
	 <div class="footer_1i">
	  <hr class="line_1">
	  <h5 class="mb-3">RECENT NEWS</h5>
	   <p class="font_14 mb-2"><a href="#">INTEGER AT DIAM GRAVIDA FRINGILLA NIBH PRETI PURUS</a></p>
	  <h6 class="col_light font_14"><i class="fa fa-clock-o col_pink me-1"></i> May 18 <a class="col_light" href="#"><i class="fa fa-comment-o col_pink me-1 ms-3"></i> 2</a></h6>
	  <hr>
	   <p class="font_14 mb-2"><a href="#">DONEC QUIS EX VEL TINCIDUNT</a></p>
	  <h6 class="col_light font_14"><i class="fa fa-clock-o col_pink me-1"></i> July 19 <a class="col_light" href="#"><i class="fa fa-comment-o col_pink me-1 ms-3"></i> 2</a></h6>
	  <hr>
	  <p class="font_14 mb-2"><a href="#">PRAESENT IACULIS TORTOR VIVERRA</a></p>
	  <h6 class="col_light font_14"><i class="fa fa-clock-o col_pink me-1"></i> June 17 <a class="col_light" href="#"><i class="fa fa-comment-o col_pink me-1 ms-3"></i> 2</a></h6>
	 </div>
	</div>
   </div>
   <div class="row footer_2 mt-4 text-center">
    <div class="col-md-12">
	 <ul>
	  <li class="d-inline-block me-3 font_14"><a href="#">CONTACT</a></li>
	  <li class="d-inline-block me-3 font_14"><a href="#">PRIVACY POLICY</a></li>
	  <li class="d-inline-block me-3 font_14"><a href="#">TERMS OF USE</a></li>
	  <li class="d-inline-block font_14"><a href="#">FAQ</a></li>
	 </ul>
	 <p class="mb-0">© 2013 Your Website Name. All Rights Reserved | Design by <a class="col_pink" href="http://www.templateonweb.com">TemplateOnWeb</a></p>
	</div>
   </div>
 </div>
</section>

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