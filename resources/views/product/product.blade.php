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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
     <!-- Include jQuery from CDN -->
       <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  
</head>
<body>
@include('partials.navbar')


<section id="center" class="center_o bg_gray pt-2 pb-2">
 <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-5">
     <div class="center_o1l">
	  <h2 class="mb-0">Product Detail</h2>
	 </div>
   </div>
   <div class="col-md-7">
     <div class="center_o1r text-end">
	  <h6 class="mb-0"><a href="#">Home</a> <span class="me-2 ms-2"><i class="fa fa-caret-right"></i></span> Product Detail</h6>
	 </div>
   </div>
  </div>
 </div>
</section>

<section id="detail" class="p_4">
 <div class="container-xl">
  <div class="row detail_1">
   <div class="col-md-5">
     <div class="detail_1l">
       <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/48.jpg" class="d-block w-100" alt="abc">
      
    </div>
    <div class="carousel-item">
      <img src="img/49.jpg" class="d-block w-100" alt="abc">
      
    </div>
    <div class="carousel-item">
      <img src="img/50.jpg" class="d-block w-100" alt="abc">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	 </div>
   </div>
   <div class="col-md-7">
     <div class="detail_1r">
       <h2>Semper Porta</h2>
	   <h6 class="font_14 mt-3 col_pink ">  
	  <span class="col_yell">
	   <i class="fa fa-star"></i>
	   <i class="fa fa-star"></i>
	   <i class="fa fa-star"></i>
	   <i class="fa fa-star"></i>
	   <i class="fa fa-sta-or"></i>
	  </span>  
	  - 3 Customer Reviews</h6>
	  <h4 class="mt-3"><span class="me-2">$18.00</span> <span class="fs-6 text-decoration-line-through col_light">$28.00</span></h4>
	  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
	  <input type="number" min="1" value="1" class="form-control mt-2 bg_dark" placeholder="Qty" style="width:80px; height:49px; margin-right:10px; float:left;">
	  <h6 class="mt-4 mb-0 text-uppercase"><a class="button" href="#"><i class="fa fa-shopping-cart bg-white col_pink p-3"> </i> <span class="ps-3 pe-3">Add To Cart</span></a></h6>
	  <p class="mt-3 mb-2">The product is already in the wishlist! <a class="col_pink hover_white" href="#">Browse Wishlist</a></p>
	  <p>Category: <a class="col_pink hover_white" href="#">Posters</a></p>
	  <ul class="social-network social-circle mb-0">
					<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-skype"></i></a></li>
					<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
				</ul>
	 </div>
   </div>
  </div>
  <div class="row detail_2">
   <div class="col-md-12">
     <ul class="nav nav-tabs mb-0">
    <li class="nav-item d-inline-block me-3">
        <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
            <span class="d-md-block">DESCRIPTION</span>
        </a>
    </li>
    <li class="nav-item d-inline-block">
        <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
            <span class="d-md-block">REVIEW (4)</span>
        </a>
    </li>
    
</ul>
   </div>
  </div>
  <div class="row detail_3 mt-4">
   <div class="tab-content">
    <div class="tab-pane active" id="home">
       <div class="home_i row">
		 <div class="col-md-12">
		   <h4>DESCRIPTION</h4>
		   <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		   <h5 class="text-uppercase">Adipiscing Elit</h5>
		   <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		   <h5 class="text-uppercase mb-3">Integer Nec</h5>
		   <ul class="mb-0">
			<li class="mb-2"><i class="fa fa-circle-o me-1 col_pink"></i> Sed cursus ante dapibus diam Sed nisi. </li>
			<li class="mb-2"><i class="fa fa-circle-o me-1 col_pink"></i> Nulla quis sem at nibh elementum imperdiet.</li>
			<li class="mb-2"><i class="fa fa-circle-o me-1 col_pink"></i> Duis sagittis ipsum Praesent mauris.</li>
			<li class="mb-2"><i class="fa fa-circle-o me-1 col_pink"></i> Fusce nec tellus sed augue semper porta.</li>
			<li class="mb-2"><i class="fa fa-circle-o me-1 col_pink"></i> Mauris massa Vestibulum lacinia arcu eget nulla.</li>
			</ul>
		 </div>
	  </div>
    </div>
	@include('Feedback.feedback')

  <div class="row detail_4 mt-4">
   <h4 class="mb-0">RELATED PRODUCTS</h4>
  </div>
  <div class="row product_2">
   <div class="col-md-3">
     <div class="prod_main p-1 bg-white clearfix">
	   <div class="product_2im clearfix position-relative">
        <div class="product_2imi clearfix">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#">
                    <img src="{{Vite::asset('resources/assetsfront/img/45.jpg')}}" class="w-100" alt="abc" >        
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="#"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="#"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="#">Dapibus Diam</a></h5>
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
					<a href="#">
                    <img src="{{Vite::asset('resources/assetsfront/img/46.jpg')}}" class="w-100" alt="abc" >        
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="#"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="#"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="#">Semp Porta</a></h5>
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
					<a href="#">
                    <img src="{{Vite::asset('resources/assetsfront/img/47.jpg')}}" class="w-100" alt="abc" >        
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="#"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="#"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="#">Lorem Nulla</a></h5>
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
					<a href="#">
                    <img src="{{Vite::asset('resources/assetsfront/img/40.jpg')}}" class="w-100" alt="abc" >    
				  </figure>
			  </div>
		</div>
		<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
		 <ul class="mb-0">
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="#"><i class="fa fa-shopping-cart"></i></a></li>
		  <li class="d-inline-block"><a class="bg_pink text-white d-block" href="#"><i class="fa fa-heart-o"></i></a></li>
		 </ul>
		</div>
	 </div>
	   <div class="product_2im1 position-relative clearfix">
        <div class="clearfix product_2im1i text-center pt-3 pb-4">
		  <h5 class="font_14 text-uppercase"><a class="col_dark" href="#">Quis Sem</a></h5>
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