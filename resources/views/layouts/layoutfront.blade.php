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
	<link href="css/index.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz@9..144&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="main clearfix position-relative">
 <div class="main_1 clearfix position-absolute top-0 w-100">
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
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="blog.html"> Blog</a></li>
            <li><a class="dropdown-item border-0" href="blog_detail.html"> Blog Detail</a></li>
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

 </div>
 <div class="main_2 clearfix">
   <section id="center" class="center_home">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{Vite::asset('resources/assetsfront/img/1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
         <h1 class="text-white font_60">Red Beauty Nature</h1>
		 <h4 class="text-white mt-3">Photography</h4>
		 <p class="text-white mt-4">The beauty of a woman is not in a facial mode but the true beauty in a woman is reflected in her soul. It is the caring that she lovingly gives the passion that she shows. The beauty of a woman grows with the passing years.</p>
		 <h6 class="mt-4 mb-0"><a class="button" href="#"><i class="fa fa-bullhorn bg-white col_pink p-3"> </i> <span class="ps-3 pe-3">Back to overview</span></a></h6>
		
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{Vite::asset('resources/assetsfront/img/2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
         <h1 class="text-white font_60">Other Type Painting</h1>
		 <h4 class="text-white mt-3">Photography</h4>
		 <p class="text-white mt-4">The beauty of a woman is not in a facial mode but the true beauty in a woman is reflected in her soul. It is the caring that she lovingly gives the passion that she shows. The beauty of a woman grows with the passing years.</p>
		 <h6 class="mt-4 mb-0"><a class="button" href="#"><i class="fa fa-bullhorn bg-white col_pink p-3"> </i> <span class="ps-3 pe-3">Back to overview</span></a></h6>
		
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{Vite::asset('resources/assetsfront/img/3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
         <h1 class="text-white font_60">Trending Art Picture</h1>
		 <h4 class="text-white mt-3">Photography</h4>
		 <p class="text-white mt-4">The beauty of a woman is not in a facial mode but the true beauty in a woman is reflected in her soul. It is the caring that she lovingly gives the passion that she shows. The beauty of a woman grows with the passing years.</p>
		 <h6 class="mt-4 mb-0"><a class="button" href="#"><i class="fa fa-bullhorn bg-white col_pink p-3"> </i> <span class="ps-3 pe-3">Back to overview</span></a></h6>
		
      </div>
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
</section>
 </div>
 
</div>

<section id="port" class="p_4">
 <div class="container-xl">
  <div class="row port_1 text-center">
    <div class="col-md-12">
	  <h1 class="font_60">PORTFOLIO</h1>
	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
	  <span class="icon_line col_pink"><i class="fa fa-square-o"></i></span>
	</div>
  </div>
  <div class="row port_2 mt-4">
    <div class="col-md-12">
	<ul class="nav nav-tabs justify-content-center border-0 mb-0">
    <li class="nav-item">
        <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
            <span class="d-md-block">All</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
            <span class="d-md-block">Nature</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">People</span>
        </a>
    </li>
	<li class="nav-item">
        <a href="#settings_o" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">Still Life</span>
        </a>
    </li>
	<li class="nav-item">
        <a href="#profile_o" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">Street</span>
        </a>
    </li>
</ul>
	</div>
  </div>
 </div>
</section>

<section id="folio" class="p_4">
 <div class="container-fluid">
  <div class="row folio_1 mt-4">
      <div class="tab-content">
    <div class="tab-pane active" id="home">
       <div class="folio_1i row">
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="{{Vite::asset('resources/assetsfront/img/5.jpg')}}"  data-bs-target="#exampleModal" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModalLabel">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{Vite::asset('resources/assetsfront/img/5.jpg')}}"  class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 <div class="folio_main clearfix mt-4">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="{{Vite::asset('resources/assetsfront/img/8.jpg')}}"  data-bs-target="#exampleModal1" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal1" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal1" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal1" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal1Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{Vite::asset('resources/assetsfront/img/8.jpg')}}"  class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
	 </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="{{Vite::asset('resources/assetsfront/img/9.jpg')}}"  data-bs-target="#exampleModal2" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal2" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal2" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal2" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal2Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{Vite::asset('resources/assetsfront/img/9.jpg')}}" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 <div class="folio_main clearfix mt-4">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="{{Vite::asset('resources/assetsfront/img/10.jpg')}}"  data-bs-target="#exampleModal3" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal3" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal3" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal3" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal3Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img  src="{{Vite::asset('resources/assetsfront/img/10.jpg')}}"  class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
	 </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img  src="{{Vite::asset('resources/assetsfront/img/6.jpg')}}"  data-bs-target="#exampleModal4" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal4" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal4" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal4" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal4Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{Vite::asset('resources/assetsfront/img/6.jpg')}}"  class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 <div class="folio_main mt-4 clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img  src="{{Vite::asset('resources/assetsfront/img/7.jpg')}}"  data-bs-target="#exampleModal5" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal5" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal5" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal5" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModal5Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal5Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{Vite::asset('resources/assetsfront/img/7.jpg')}}"  class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 <div class="folio_main mt-4 clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="{{Vite::asset('resources/assetsfront/img/11.jpg')}}"  data-bs-target="#exampleModal6" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal6" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal6" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal6" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModal6Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal6Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{Vite::asset('resources/assetsfront/img/11.jpg')}}"  class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
	 </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="{{Vite::asset('resources/assetsfront/img/12.jpg')}}"  data-bs-target="#exampleModal7" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal7" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal7" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal7" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModal7Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal7Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/12.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 <div class="folio_main mt-4 clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/13.jpg" data-bs-target="#c5" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal8" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal8" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal8" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModal5Label8" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal5Label8">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/13.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 
	 </div>
	   </div>
	   
    </div>
    <div class="tab-pane" id="profile">
       <div class="folio_1i row">
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/6.jpg" data-bs-target="#exampleModal9" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal9" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal9" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal9" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModal9Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal9Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/6.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 <div class="folio_main mt-4 clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/7.jpg" data-bs-target="#exampleModal10" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal10" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal10" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal10" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModal10Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal10Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/7.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 
	 </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/8.jpg" data-bs-target="#exampleModal11" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal11" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal11" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal11" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModal11Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal11Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/8.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
	 </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/9.jpg" data-bs-target="#exampleModal12" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal12" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal12" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal12" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModal12Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal12Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/9.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 
	 </div>
	     
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/12.jpg" data-bs-target="#exampleModal13" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal13" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal13" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal13" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModal13Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal13Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/12.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 
	 </div>
	   </div>
    </div>
    <div class="tab-pane" id="settings">
       <div class="folio_1i row">
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/7.jpg" data-bs-target="#exampleModal14" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal14" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal14" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal14" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModal14Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal14Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/7.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 
	 </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/8.jpg" data-bs-target="#exampleModal15" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal15" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal15" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal15" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModal15Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal15Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/8.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 
	 </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/5.jpg" data-bs-target="#exampleModal16" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal16" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal16" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal16" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModal16Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal16Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/5.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 
	 </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/13.jpg" data-bs-target="#exampleModal18" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal18" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal18" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal18" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal18" tabindex="-1" aria-labelledby="exampleModal18Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal18Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/13.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 
	 </div>
	   </div>
    </div>
	
	<div class="tab-pane" id="settings_o">
	   <div class="folio_1i row">
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/5.jpg" data-bs-target="#exampleModal19" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal19" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal19" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal19" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal19" tabindex="-1" aria-labelledby="exampleModal19Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal19Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/5.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
	 </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/7.jpg" data-bs-target="#exampleModal20" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal20" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal20" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal20" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModal20Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal20Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/7.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 <div class="folio_main mt-4 clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/6.jpg" data-bs-target="#exampleModal21" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal21" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal21" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal21" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal21" tabindex="-1" aria-labelledby="exampleModal21Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal21Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/6.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
	 </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/10.jpg" data-bs-target="#exampleModal22" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal22" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal22" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal22" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal22" tabindex="-1" aria-labelledby="exampleModal22Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal22Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/10.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 
	 </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/11.jpg" data-bs-target="#exampleModal23" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal23" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal23" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal23" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal23" tabindex="-1" aria-labelledby="exampleModal23Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal23Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/11.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 
	 </div>
	   </div>
    </div>
	<div class="tab-pane" id="profile_o">
         <div class="folio_1i row">
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/12.jpg" data-bs-target="#exampleModal24" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal24" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal24" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal24" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal24" tabindex="-1" aria-labelledby="exampleModal24Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal24Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/12.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
	    </div>
	     <div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/9.jpg" data-bs-target="#exampleModal25" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal25" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal25" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal25" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal25" tabindex="-1" aria-labelledby="exampleModal25Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal25Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/9.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
	    </div>
		<div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/11.jpg" data-bs-target="#exampleModal26" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal26" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal26" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal26" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal26" tabindex="-1" aria-labelledby="exampleModal26Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal26Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/11.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 <div class="folio_main mt-4 clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/6.jpg" data-bs-target="#exampleModal27" data-bs-toggle="modal" class="w-100" height="240" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal27" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal27" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal27" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal27" tabindex="-1" aria-labelledby="exampleModal27Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal27Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/6.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
	    </div>
		<div class="col-md-3">
		 <div class="folio_main clearfix">
		   <div class="folio_1im position-relative clearfix">
	   <div class="folio_1im1 clearfix">
	     <a href="#"><img src="img/8.jpg" data-bs-target="#exampleModal28" data-bs-toggle="modal" class="w-100" height="410" alt="abc"></a>
	   </div>
	   <div class="folio_1im2 pt-5 position-absolute top-0 h-100 text-center w-100 clearfix">
	     <ul class="mb-0">
		  <li class="d-inline-block fs-5 me-1"><a data-bs-target="#exampleModal28" data-bs-toggle="modal" href="#"><i class="fa fa-link"></i></a></li>
		  <li class="d-inline-block fs-5"><a data-bs-target="#exampleModal28" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
		 </ul>
	   </div>
	   
	   <div class="folio_1im3  p-3 position-absolute bottom-0  text-center w-100 clearfix">
	     <h6><a class="text-light" data-bs-target="#exampleModal28" data-bs-toggle="modal" href="#">MASTER PIECE</a></h6>
		 <h6 class="mb-0 text-white font_14">People, Still Life</h6>
	   </div>
		
	  </div>
	       <div class="modal fade" id="exampleModal28" tabindex="-1" aria-labelledby="exampleModal28Label" aria-hidden="true" style="display: none;">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-black" id="exampleModal28Label">Art Web</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="img/8.jpg" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn text-white bg_pink">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		 </div>
		 
	    </div>
	   </div>
    </div>
</div>
  </div>
  
 </div>
</section>

<section id="bloh_h" class="p_4">
 <div class="container-fluid">
  <div class="row port_1 text-center mb-4">
    <div class="col-md-12">
	  <h1 class="font_60">BLOG</h1>
	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
	  <span class="icon_line col_pink"><i class="fa fa-square-o"></i></span>
	</div>
  </div>
  <div class="row bloh_h1">
    <div class="col-md-6 p-0">
	 <div class="bloh_h1l">
	   <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/14.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/15.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	 </div>
	</div>
	<div class="col-md-6">
	 <div class="bloh_h1r text-center">
	  <h1 class="font_50">ACRYLIC</h1>
	  <p class="mt-3"><span class="fw-bold">Acrylic painting</span>, technique in which pigments are mixed with hot, liquid wax. After all of the colours have been applied to the painting surface, a heating element is passed over them until the individual brush or spatula marks fuse into a uniform film.</p>
	  <h6 class="mt-4 mb-0"><a class="button" href="#"><i class="fa fa-bullhorn bg-white col_pink p-3"> </i> <span class="ps-3 pe-3">VIEW GALLERY</span></a></h6>
	 </div>
	</div>
  </div>
  <div class="row bloh_h1">
	<div class="col-md-6">
	 <div class="bloh_h1r text-center">
	  <h1 class="font_50">ENCAUSTIC</h1>
	  <p class="mt-3"><span class="fw-bold">Other painting</span>, technique in which pigments are mixed with hot, liquid wax. After all of the colours have been applied to the painting surface, a heating element is passed over them until the individual brush or spatula marks fuse into a uniform film.</p>
	  <h6 class="mt-4 mb-0"><a class="button" href="#"><i class="fa fa-bullhorn bg-white col_pink p-3"> </i> <span class="ps-3 pe-3">VIEW GALLERY</span></a></h6>
	 </div>
	</div>
	<div class="col-md-6 p-0">
	 <div class="bloh_h1l">
	   <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/16.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/17.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	 </div>
	</div>
  </div>
  <div class="row bloh_h1">
    <div class="col-md-6 p-0">
	 <div class="bloh_h1l">
	   <div id="carouselExampleCaptions3" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/18.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/19.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	 </div>
	</div>
	<div class="col-md-6">
	 <div class="bloh_h1r text-center">
	  <h1 class="font_50">OIL PAINTING</h1>
	  <p class="mt-3"><span class="fw-bold">Acrylic painting</span>, technique in which pigments are mixed with hot, liquid wax. After all of the colours have been applied to the painting surface, a heating element is passed over them until the individual brush or spatula marks fuse into a uniform film.</p>
	  <h6 class="mt-4 mb-0"><a class="button" href="#"><i class="fa fa-bullhorn bg-white col_pink p-3"> </i> <span class="ps-3 pe-3">VIEW GALLERY</span></a></h6>
	 </div>
	</div>
  </div>
  <div class="row bloh_h1">
	<div class="col-md-6">
	 <div class="bloh_h1r text-center">
	  <h1 class="font_50">IMPASTO</h1>
	  <p class="mt-3"><span class="fw-bold">Other painting</span>, technique in which pigments are mixed with hot, liquid wax. After all of the colours have been applied to the painting surface, a heating element is passed over them until the individual brush or spatula marks fuse into a uniform film.</p>
	  <h6 class="mt-4 mb-0"><a class="button" href="#"><i class="fa fa-bullhorn bg-white col_pink p-3"> </i> <span class="ps-3 pe-3">VIEW GALLERY</span></a></h6>
	 </div>
	</div>
	<div class="col-md-6 p-0">
	 <div class="bloh_h1l">
	   <div id="carouselExampleCaptions4" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/20.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/21.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	 </div>
	</div>
  </div>
 </div>
</section>

<section id="frame" class="p_4 pt-0">
 <div class="container-fluid">
  <div class="row port_1 text-center mb-4">
    <div class="col-md-12">
	  <h1 class="font_60">FRAMES</h1>
	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
	  <span class="icon_line col_pink"><i class="fa fa-square-o"></i></span>
	</div>
  </div>
  <div class="row frame_1">
    <div class="col-md-6">
	  <div class="frame_1l">
	     <div class="tab-content">
    <div class="tab-pane active" id="home1">
       <div class="frame_1li row">
	      <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/24.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		   <div class="frame_1li1 mt-4">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/25.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		  </div>
		  <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/22.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		   
		  </div>
		  <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/26.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		   <div class="frame_1li1 mt-4">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/28.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		  </div>
	   </div>
	   
    </div>
    <div class="tab-pane" id="profile1">
       <div class="frame_1li row">
	      <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/24.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		  </div>
		  <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/23.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		   
		  </div>
		  <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/26.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		   
		  </div>
	   </div>
    </div>
    <div class="tab-pane" id="settings1">
        <div class="frame_1li row">
	      <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/25.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		  </div>
		  <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/27.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		   
		  </div>
		  <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/28.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		   
		  </div>
	   </div>
    </div>
	
	<div class="tab-pane" id="settings2">
	   <div class="frame_1li row">
	      <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/24.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		  </div>
		  <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/23.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		   
		  </div>
		  <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/26.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		   
		  </div>
	   </div>
    </div>
	<div class="tab-pane" id="profile2">
         <div class="frame_1li row">
	      <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/25.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		  </div>
		  <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/27.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		   
		  </div>
		  <div class="col-md-4">
		   <div class="frame_1li1">
		     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/28.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		   </div>
		   
		  </div>
	   </div>
    </div>
</div>
	  </div>
	</div>
    <div class="col-md-6">
	  <div class="frame_1r text-center">
	    <p>The secret to so many artists living so long is that every painting is a new adventure. So, you see, they're always looking ahead to something new and exciting. The secret is not to look back.</p>
		<ul class="nav nav-tabs justify-content-center border-0 mb-0 mt-4">
    <li class="nav-item">
        <a href="#home1" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
            <span class="d-md-block">All</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
            <span class="d-md-block">CERAMIC</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#settings1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">PLASTIC</span>
        </a>
    </li>
	<li class="nav-item">
        <a href="#settings2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">WOODEN</span>
        </a>
    </li>
	<li class="nav-item">
        <a href="#profile2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">STEEL</span>
        </a>
    </li>
</ul>
	  </div>
	</div>
  </div>
 </div>
</section>

<section id="about_h" class="p_4 pt-0">
 <div class="container-xl">
  <div class="row port_1 text-center mb-4">
    <div class="col-md-12">
	  <h1 class="font_60">ABOUT US</h1>
	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
	  <span class="icon_line col_pink"><i class="fa fa-square-o"></i></span>
	</div>
  </div>
  <div class="about_h1 row">
   <div class="col-md-6">
     <div class="about_h1l">
	   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/29.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	 </div>
   </div>
   <div class="col-md-6">
     <div class="about_h1r">
	  <h1>A LITTLE INTRO</h1>
	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
	  <h1 class="mt-4">MY EXHIBITIONS</h1>
	  <p>Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor quis nostrud exercitation ullamco</p>
	  <h1 class="mt-4">NEWSLETTER</h1>
	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
	  <div class="input-group mt-4">
				<input type="text" class="form-control" placeholder="Email">
				<span class="input-group-btn">
					<button class="btn btn-primary bg_pink font_14 rounded-0" type="button">
						SUBSCRIBE </button>
				</span>
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
					<a href="#"><img src="img/30.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-4 col-4 p-0">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/31.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-4 col-4 p-0">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/32.jpg" class="w-100" alt="abc"></a>
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
					<a href="#"><img src="img/33.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-4 col-4 p-0">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/34.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-4 col-4 p-0">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/35.jpg" class="w-100" alt="abc"></a>
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