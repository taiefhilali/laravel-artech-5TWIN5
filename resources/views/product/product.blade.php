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

<<<<<<< Updated upstream
=======
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha512-XYZ" crossorigin="anonymous"></script>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-XYZ" crossorigin="anonymous" />
<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/global.css" rel="stylesheet">
	<link href="css/product.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz@9..144&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
     <!-- Include jQuery from CDN -->
       <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Bootstrap JS and Popper.js (required for some Bootstrap components) -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-XYZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-XYZ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-XYZ" crossorigin="anonymous"></script>
>>>>>>> Stashed changes
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
   <!-- <div class="col-md-5">
   		<img src="{{ asset( 'uploads/product/' . $product->image_url) }}" alt="Product Image" style="max-width: 500px; max-height: 500px;">
    </div> -->
   <div class="col-md-7">
     <div class="detail_1r">
       <h2>{{$product->title}}</h2>
	   <h6 class="font_14 mt-3 col_pink ">  
	  <span class="col_yell">
	   <i class="fa fa-star"></i>
	   <i class="fa fa-star"></i>
	   <i class="fa fa-star"></i>
	   <i class="fa fa-star"></i>
	   <i class="fa fa-sta-or"></i>
	  </span>  
	  - 3 Customer Reviews</h6>
	  <h4 class="mt-3"><span class="me-2">{{$product->price}}</span></h4>
	  <p>{{$product->description}}</p>
	  <input type="number" min="1" value="1" class="form-control mt-2 bg_dark" placeholder="Qty" style="width:80px; height:49px; margin-right:10px; float:left;">
	  <h6 class="mt-4 mb-0 text-uppercase"><a class="button" href="#"><i class="fa fa-shopping-cart bg-white col_pink p-3"> </i> <span class="ps-3 pe-3">Add To Cart</span></a></h6>
	  <p class="mt-3 mb-2">The product is already in the wishlist! <a class="col_pink hover_white" href="#">Browse Wishlist</a></p>
	  <p>Category: {{$productType->name}}</p>
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
		   <p>{{$product->description}}</p>
		   <h5 class="text-uppercase mb-3">DETAILS</h5>
		   <ul class="mb-0">
		   <li class="mb-2"><i class="fa fa-circle-o me-1 col_pink"></i>Artist's name : {{$product->artist}}</li>
		   <li class="mb-2"><i class="fa fa-circle-o me-1 col_pink"></i> Creation date : {{$product->creation_date}}</li>
			<li class="mb-2"><i class="fa fa-circle-o me-1 col_pink"></i>Medium : {{$product->medium}}</li>
			<li class="mb-2"><i class="fa fa-circle-o me-1 col_pink"></i> Dimensions : {{$product->dimensions}}</li>
			<li class="mb-2"><i class="fa fa-circle-o me-1 col_pink"></i>Quanity : {{$product->quantity}}</li>

			</ul>
		 </div>
	  </div>
    </div>
   </i>

  <section id="center" class="center_o bg_gray pt-2 pb-2" style="margin-top:20px">
 <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-5">
     <div class="center_o1l">
	  <h2 class="mb-0">View Catalogs</h2>
	 </div>
   </div>
  </div>
 </div>
</section>
  
  <div class="row product_2">
  	@foreach ($productTypes as $type)
   	 <div class="col-md-3">
        <div class="prod_main p-1 bg-white clearfix">
            <div class="product_2im clearfix position-relative">
                <div class="product_2imi clearfix">
                    <div class="grid clearfix">
                        <figure class="effect-jazz mb-0">
                            <!-- <a href="#">
                                <img src="{{ asset('uploads/catalog/'.$type->image) }}" class="w-100" style="height:300px" alt="abc">
                            </a> -->
                        </figure>
                    </div>
                </div>
				<div class="product_2imi1 position-absolute clearfix w-100 top-0 text-center">
					<ul class="mb-0">
						<form action="{{ route('product.indexUser') }}" method="GET">
							<input type="hidden" name="categories" value="{{ $type->id }}" />
							<li class="d-inline-block">
								<button style="border:none; font-size: 24px; padding: 10px 20px;" type="submit" class="bg_pink text-white d-block">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</button>
							</li>
						</form>
					</ul>
				</div>

            </div>
            <div class="product_2im1 position-relative clearfix">
                <div class="clearfix product_2im1i text-center pt-3 pb-4">
                    <h5 class="font_14 text-uppercase"><a class="col_dark" href="#">{{$type->name}}</a></h5>
                    <h6 class="col_dark mt-2 mb-0">{{$type->description}}</h6>
                </div>
            </div>
        </div>
    		</div>
	@endforeach


  

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