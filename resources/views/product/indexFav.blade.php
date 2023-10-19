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


<div class="container">

<section id="bloh_h" class="p_4">
    <div class="container-fluid">
        <div class="row port_1 text-center mb-4">
            <div class="col-md-12">
                <h1 class="font_60">Your Favorite Artwork</h1>
                <p>Here are the arts that you've favorited. Enjoy your personal collection!</p>
                <span class="icon_line col_pink"><i class="fa fa-square-o"></i></span>
            </div>
        </div>
        @foreach ($favoriteProducts as $key => $product)
            <div class="row bloh_h1">
                @if ($key % 2 === 0)
                    <div class="col-md-6 p-0">
                        <div class="bloh_h1l">
                            <img src="{{ asset('uploads/product/' . $product->image_url) }}" class="d-block w-100" style="height:300px" alt="{{ $product->title }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bloh_h1r text-center">
                            <h1 class="font_50">{{ $product->title }}</h1>
                            <p class="mt-3">
                                <span class="fw-bold">{{ $product->medium }}</span>, {{ $product->description }}
                            </p>
                            <h6 class="mt-4 mb-0" style="display:flex">
                            <form action="{{ route('product.removeFav', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE') 
                                    <button class=" ps-3 pe-3" type="submit" style="background: transparent; border: none;">
                                    <i class="fa fa-thumbs-o-down bg-white col_pink p-3 " aria-hidden="true"></i>
                                    </button>
                                </form>
                                <button class="button" onclick="window.location.href='{{ url('product', $product->id) }}';">
                                    <span class="ps-3 pe-3">VIEW GALLERY</span>
                                </button>
                                </h6>
                        </div>
                    </div>
                @else
                    <div class="col-md-6">
                        <div class="bloh_h1r text-center">
                            <h1 class="font_50">{{ $product->title }}</h1>
                            <p class="mt-3">
                                <span class="fw-bold">{{ $product->medium }}</span>, {{ $product->description }}
                            </p>
                            <h6 class="mt-4 mb-0" style="display:flex ; margin-left:30px">
                            <form  style="margin-left:30px" action="{{ route('product.removeFav', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE') <!-- This method spoofing is needed because you're using a POST request -->
                                    <button class=" ps-3 pe-3" type="submit" style="background: transparent; border: none;">
                                    <i class="fa fa-thumbs-o-down bg-white col_pink p-3 " aria-hidden="true"></i>
                                    </button>
                                </form>
                                <button class="button" onclick="window.location.href='{{ url('product', $product->id) }}';">
                                    <span class="ps-3 pe-3">VIEW DETAILS</span>
                                </button>
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="bloh_h1l">
                            <img src="{{ asset('uploads/product/' . $product->image_url) }}" style="height:300px"  class="d-block w-100" alt="{{ $product->title }}">
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</section>


</div>


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