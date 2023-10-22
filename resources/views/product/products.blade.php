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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
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
                        <h6 class="mb-0"><a href="#">Home</a> <span class="me-2 ms-2"><i
                                    class="fa fa-caret-right"></i></span> Product</h6>
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
                            <option value="">Choose a Catalog</option>
                            @foreach ($productType as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            {{-- <div class="row product_2 mt-4">
                @foreach ($products as $product)
                    <div class="col-md-3" style="margin-bottom:10px; ">
                        <div class="prod_main p-1 bg-white clearfix" style="height:430px;">
                            <div class="product_2im clearfix position-relative">
                                <div class="product_2imi clearfix">
                                    <div class="grid clearfix">
                                        <figure class="effect-jazz mb-0">
                                            <a href="detail.html">
                                                <img src="{{ asset('uploads/product/' . $product->image_url) }}"
                                                    class="w-100" alt="abc">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="product_2im1 position-relative clearfix">
                                <div class="clearfix product_2im1i text-center pt-3 pb-4">
                                    <h5 class="font_14 text-uppercase"><a class="col_dark"
                                            href="detail.html">{{ $product->title }}</a></h5>
                                    <span class="font_12 col_yell">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h6 class="col_dark mt-2 mb-0">{{ $product->price }}</h6>
                                </div>
                                <div class="clearfix product_2im1i1 text-center position-absolute w-100">
                                    <h6 class="d-inline-block bg_pink p-2 ps-3 pe-3"><span
                                            class="text-decoration-line-through me-2 col_gray">View Detail</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="cart_3l1i2">


                        <br>
                        <form action="{{ route('product.addToCart', $product->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="btn btn-primary" style="background-color: #a81c51;">Add to
                                Cart</button>
                        </form>
                    </div>
                @endforeach
            </div> --}}

            

            <style>
                .product-image {
                    height: 200px;
                    width: 100%;
                    object-fit: cover;
                }
            
                .prod_main {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                }
            </style>
            
            <div class="row product_2 mt-4">
                @foreach ($products as $product)
                <div class="col-md-3" style="margin-bottom:10px;"> 
                    <div class="prod_main p-1 bg-white clearfix" style="height:430px;">
                        <div class="product_2im clearfix position-relative">
                            <figure class="effect-jazz mb-0">
                                <a href="detail.html">
                                    <img src="{{ asset( 'uploads/product/' . $product->image_url) }}" class="w-100 product-image" alt="abc">
                                </a>
                            </figure>
                            
                            <ul class="mb-0 position-absolute w-100 top-0 text-center">
                                <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-shopping-cart"></i></a></li>
                                <li class="d-inline-block"><a class="bg_pink text-white d-block" href="detail.html"><i class="fa fa-heart-o"></i></a></li>
                            </ul>
                        </div>
            
                        <div class="product_2im1 position-relative clearfix">
                            <div class="clearfix product_2im1i text-center pt-3 pb-4">
                                <h5 class="font_14 text-uppercase"><a class="col_dark" href="detail.html">{{ $product->title }}</a></h5>
                                <span class="font_12 col_yell">
                                    <!-- Vous pouvez ajouter une logique ici pour gérer l'affichage des étoiles -->
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <h6 class="col_dark mt-2 mb-0">{{ $product->price }}</h6>
                            </div>
            
                            <form action="{{ route('product.addToCart', $product->id) }}" method="POST" style="margin-top: auto;">
                                @csrf
                                <input type="hidden" name="quantity" value="1">
                                <center>                                <button type="submit" class="btn btn-primary mt-2" style="background-color: #a81c51; ">Add to Cart</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            

            <br>
            <li class="d-inline-block">
                <form action="{{ route('fav.add', $product->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" style="size:large;border:none;background:transparent"
                        class="bg_pink text-white d-block">
                        <a class="bg_pink text-white d-block"> Add A
                            <i class="fa fa-heart-o"></i>
                        </a>
                    </button>
                </form>
            </li>

            <div class="pages">
                <div class="col-md-12">
                    <ul class="mb-0">
                        <li><a href="{{ $products->previousPageUrl() }}"><i class="fa fa-chevron-left"
                                    style="font-size: 12px;"></i></a></li>

                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                            <li><a class="{{ $products->currentPage() == $i ? 'act' : '' }}"
                                    href="{{ $products->url($i) }}">{{ $i }}</a></li>
                        @endfor

                        <li><a href="{{ $products->nextPageUrl() }}"><i class="fa fa-chevron-right"
                                    style="font-size: 12px;"></i></a></li>
                    </ul>
                </div>
            </div>

    </section>

    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        window.onscroll = function() {
            myFunction()
        };

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
