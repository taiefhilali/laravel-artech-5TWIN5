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
@include('partials.navbar')


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
	    <h5 class="mb-3">RECENT Events</h5>
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