<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Art Web</title>
    @vite(['resources/assetsfront/css/bootstrap.min.css'])
    @vite(['resources/assetsfront/css/font-awesome.min.css'])
    @vite(['resources/assetsfront/css/global.css'])
    @vite(['resources/assetsfront/css/cart.css'])
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz@9..144&display=swap" rel="stylesheet">
    @vite(['resources/assetsfront/js/bootstrap.bundle.min.js'])

</head>

<body>
    <section id="header">
        <nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
            <div class="container-xl">
                <a class="navbar-brand fs-2 p-0 fw-bold text-white" href="/user"><i
                        class="fa fa-pencil col_pink me-1 align-middle"></i> art <span
                        class="col_pink span_1">WEB</span> <br> <span class="font_12 span_2">DIGITAL ART</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-0 ms-auto">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/user">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Product
                            </a>
                            <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/products"> Product</a></li>
                                <li><a class="dropdown-item border-0" href="detail.html"> Product Detail</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                            </a>
                            <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="blog.html"> Blog</a></li>
                                <li><a class="dropdown-item border-0" href="blog_detail.html"> Blog Detail</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/cart"> Shopping Cart</a></li>
                                <li><a class="dropdown-item border-0" href="/checkout"> Checkout</a></li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
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
                        <h2 class="mb-0">Shopping Cart</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="center_o1r text-end">
                        <h6 class="mb-0"><a href="#">Home</a> <span class="me-2 ms-2"><i
                                    class="fa fa-caret-right"></i></span> Shopping Cart</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cart_page" class="cart pt-4 pb-4">
        <div class="container-xl">
            <div class="cart_2 row">
                <div class="col-md-6">
                    <h5>MY CART</h5>
                </div>
                <div class="col-md-6">
                    <h5 class="text-end text-uppercase"><a href="#">Continue Shopping</a></h5>
                </div>
            </div>
            <div class="cart_3 row mt-3">
                <div class="col-md-8">
                    <div class="cart_3l">
                        <h6>PRODUCT</h6>
                    </div>


                    @foreach ($cartItems as $item)
                        <div class="cart_3l1 mt-3 row ms-0 me-0">
                            <div class="col-md-3 ps-0 col-3">
                                <div class="cart_3l1i">
                                    <a href="#">
                                        {{-- <img src="{{Vite::asset($item->product->image_url)}}" alt="product image" class="w-100"> --}}
                                        @if ($item->product)
                                            <img src="{{ asset('uploads/product/' . $item->product->image_url) }}"
                                                class="w-100" alt="Product Image">
                                        @endif

                                    </a>
                                </div>
                            </div>
                            <div class="col-md-9 col-9">
                                <div class="cart_3l1i1">
                                    @if ($item->product)
                                        <h6 class="fw-bold">
                                            <a href="#">
                                                {{-- {{ $item->product->title }} --}}
                                                {{ $item->product->title }}
                                    @endif

                                    </a>
                                    </h6>
                                    @if ($item->product)
                                        <h5 class="col_pink mt-3">
                                            $ {{ $item->product->price }}
                                        </h5>
                                    @endif

                                    @if ($item->product)
                                        <h6 class="font_12 mt-3 mb-3">Quantity:
                                            {{ $item->product->quantity }}
                                    @endif
                                    </h6>
                                </div>
                                <div class="cart_3l1i2">
                                    @if ($item->product)
                                        {{-- <input type="number" min="1" value="{{ $item->product->quantity }}"
                                            class="form-control" placeholder="Qty">
                                        {{-- <h6><a class="button_1" href="{{ route('cart.remove', $item->id) }}">REMOVE</a></h6> 
                                        <h6>
                                            <form action="{{ route('cart.update', $cartItemId) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                            </form>
                                            <button type="submit" class="button">UPDATE CART</button>
                                        </h6> --}}

										<form action="{{ route('cart.update', $item->id) }}" method="POST">
											@csrf
											@method('PUT')
											
											<input type="number" name="quantity" min="1" value="{{ $item->product->quantity }}" class="form-control" placeholder="Qty">
											
											<button type="submit" class="button">UPDATE CART</button>
										</form>

										
                                    @endif

                                </div>
                            </div>
                        </div>

                        
                    @endforeach

                    
                    {{-- <form action="{{ route('cart.confirm') }}" method="POST">
                        @csrf
                        @method('POST')

                        <button type="submit">Confirmer</button>
                    </form>

                    <br> --}}
                    {{-- <div class="mt-1" style="background-color: white; border: 1px solid black;">
                        {{ $cartItems->links() }}
                        <style>
                            .pagination img {
                                width: 20px; /* ou une autre valeur qui convient */
                                height: 20px;
                            }
                        </style>
                    </div> --}}

                    <div class="pages">
                        <div class="col-md-12">
                            <ul class="mb-0">
                                <li><a href="{{ $cartItems->previousPageUrl() }}"><i class="fa fa-chevron-left" style="font-size: 12px;"></i></a></li>
                                
                                @for($i = 1; $i <= $cartItems->lastPage(); $i++)
                                    <li><a class="{{ ($cartItems->currentPage() == $i) ? 'act' : '' }}" href="{{ $cartItems->url($i) }}">{{ $i }}</a></li>
                                @endfor
                    
                                <li><a href="{{ $cartItems->nextPageUrl() }}"><i class="fa fa-chevron-right" style="font-size: 12px;"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    
                    
                    

                    <br>

                    
                    {{-- <a href="{{ route('cart.exportToPDF') }}" class="btn btn-primary">Exporter en PDF</a> --}}

                    <a href="{{ route('cart.exportCartToPDF') }}" class="btn btn-primary" style="background-color: #a81c51;">Exporter en PDF</a>

                </div>
                <div class="col-md-4">
                    <div class="cart_3r">
                        <h6 class="head_1">SUBTOTAL</h6>
                        <h5 class="text-center col_pink mt-3">$1,347.00</h5>
                        <hr>

                        <h6 class="text-center mt-3"><a class="button" href="checkout.html">PROCEED TO CHECKOUT</a>
                        </h6><br>
                        <h5>GET SHIPPING ESTIMATES</h5>
                        <hr>
                    </div>
                    <div class="cart_3r1">
                        <h6 class="font_13">Country</h6>
                        <select class="form-select bg_gray" id="subject" name="subject">
                            <option>America</option>
                            <option>India</option>
                            <option>England</option>
                            <option>Africa</option>
                        </select><br>
                        <h6 class="font_13">State</h6>
                        <select class="form-select bg_gray" id="subject_1" name="subject">
                            <option>Delhi</option>
                            <option>Uttar Pradesh</option>
                            <option>Punjab</option>
                            <option>Madhya Pradesh</option>
                        </select><br>
                        <h6 class="font_13">Postal/Zip Code</h6>
                        <input class="form-control" type="text">
                        <h6 class="text-center mt-3"><a class="button" href="#">CALCULATE SHIPPING</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="footer" class="pt-3 pb-3">
        <div class="container-fluid">

            <div class="row footer_2 mt-4 text-center">
                <div class="col-md-12">
                    <ul>
                        <li class="d-inline-block me-3 font_14"><a href="#">CONTACT</a></li>
                        <li class="d-inline-block me-3 font_14"><a href="#">PRIVACY POLICY</a></li>
                        <li class="d-inline-block me-3 font_14"><a href="#">TERMS OF USE</a></li>
                        <li class="d-inline-block font_14"><a href="#">FAQ</a></li>
                    </ul>
                    <p class="mb-0">© 2023 Your Website Name. All Rights Reserved | Design by <a class="col_pink"
                            href="http://www.templateonweb.com">ArTech</a></p>
                </div>
            </div>
        </div>
    </section>

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
