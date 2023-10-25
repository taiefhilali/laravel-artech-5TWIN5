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
 @include('partials.navbar')

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
    <img src="{{Vite::asset('resources/assetsfront/img/paintings.jpg')}}" class="d-block w-100" style="height:760px" alt="...">
      <div class="carousel-caption d-md-block">
         <h1 class="text-white font_60">Red Beauty Nature</h1>
		 <h4 class="text-white mt-3">Photography</h4>
		 <p class="text-white mt-4">The beauty of a woman is not in a facial mode but the true beauty in a woman is reflected in her soul. It is the caring that she lovingly gives the passion that she shows. The beauty of a woman grows with the passing years.</p>
		 <h6 class="mt-4 mb-0"><a class="button" href="#"><i class="fa fa-bullhorn bg-white col_pink p-3"> </i> <span class="ps-3 pe-3">Back to overview</span></a></h6>
		
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{Vite::asset('resources/assetsfront/img/pp.jpg')}}" class="d-block w-100" style="height:760px" alt="...">
      <div class="carousel-caption d-md-block">
         <h1 class="text-white font_60">Other Type Painting</h1>
		 <h4 class="text-white mt-3">Photography</h4>
		 <p class="text-white mt-4">The beauty of a woman is not in a facial mode but the true beauty in a woman is reflected in her soul. It is the caring that she lovingly gives the passion that she shows. The beauty of a woman grows with the passing years.</p>
		 <h6 class="mt-4 mb-0"><a class="button" href="#"><i class="fa fa-bullhorn bg-white col_pink p-3"> </i> <span class="ps-3 pe-3">Back to overview</span></a></h6>
		
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{Vite::asset('resources/assetsfront/img/ppp.jpg')}}" class="d-block w-100" style="height:760px" alt="...">
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




<section id="about_h" class="p_4 pt-0">
 <div class="container-xl">
  <div class="row port_1 text-center mb-4">
    <div class="col-md-12">
	  <h1 class="font_60">Museums</h1>
	  <span class="icon_line col_pink"><i class="fa fa-square-o"></i></span>
	</div>
  </div>
  @yield('content')
   
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