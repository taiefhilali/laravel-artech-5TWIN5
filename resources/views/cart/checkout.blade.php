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
    @vite(['resources/assetsfront/css/checkout.css'])
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz@9..144&display=swap" rel="stylesheet">
    @vite(['resources/assetsfront/js/bootstrap.bundle.min.js'])

</head>
<body>
<section id="header">
<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container-xl">
    <a class="navbar-brand fs-2 p-0 fw-bold text-white" href="/user"><i class="fa fa-pencil col_pink me-1 align-middle"></i> art <span class="col_pink span_1">WEB</span> <br> <span class="font_12 span_2">DIGITAL ART</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
	  <h2 class="mb-0">Checkout</h2>
	 </div>
   </div>
   <div class="col-md-7">
     <div class="center_o1r text-end">
	  <h6 class="mb-0"><a href="#">Home</a> <span class="me-2 ms-2"><i class="fa fa-caret-right"></i></span> Checkout</h6>
	 </div>
   </div>
  </div>
 </div>
</section>

<section id="checkout">
 <div class="container-xl">
  <div class="checkout_1 row">
    <div class="col-md-8">
	  <div class="checkout_1l">
	   <h5>Make Your Checkout Here</h5>
	   <p>Please register in order to checkout more quickly</p>
	  </div>
	  <div class="checkout_1l1 row">
       <div class="col-md-6 ps-0">
	    <h6 class="font_14 fw-bold">First Name <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-md-6 ps-0">
	    <h6 class="font_14 fw-bold">Last Name <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	  </div>
	  <div class="checkout_1l1 row">
       <div class="col-md-6 ps-0">
	    <h6 class="font_14 fw-bold">Email Address <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-md-6 ps-0">
	    <h6 class="font_14 fw-bold">Phone Number <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	  </div>
	  <div class="checkout_1l1 row">
       <div class="col-md-6 ps-0">
	    <h6 class="font_14 fw-bold">Country <span>*</span></h6>
		<select class="form-select bg_gray">
				 <option>India</option>
				 <option>Paksitan</option>
				 <option>Russia</option>
				 <option>England</option>
				 <option>Nepal</option>
			 </select>
	   </div>
	   <div class="col-md-6 ps-0">
	    <h6 class="font_14 fw-bold">State / Divition <span>*</span></h6>
		<select class="form-select bg_gray">
				 <option>UP</option>
				 <option>MP</option>
				 <option>Bihar</option>
				 <option>Delhi</option>
				 <option>Jharkhand</option>
			 </select>
	   </div>
	  </div>
	  <div class="checkout_1l1 row">
       <div class="col-md-6 ps-0">
	    <h6 class="font_14 fw-bold">Address Line 1 <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-md-6 ps-0">
	    <h6 class="font_14 fw-bold">Address Line 2 <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	  </div>
	  <div class="checkout_1l1 row">
       <div class="col-md-6 ps-0">
	    <h6 class="font_14 fw-bold">Postal Code <span>*</span></h6>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-md-6 ps-0">
	    <h6 class="font_14 fw-bold">Company <span>*</span></h6>
		<select class="form-select bg_gray">
				 <option>Microsoft</option>
				 <option>Xaiomi</option>
				 <option>Apple</option>
				 <option>Samsung</option>
				 <option>Motorola</option>
			 </select>
	   </div>
	  </div>
	  <div class="checkout_1l">
	   <div class="form-check">
        <input type="checkbox" class="form-check-input" id="customCheck1">
        <label class="form-check-label" for="customCheck1"><a href="#">Create an account?</a></label>
    </div>
	  </div>
	</div>
	 <div class="col-md-4">
       <div class="checkout_1r">
	     <h5>CART TOTALS</h5>
	     <hr class="line">
		<h6 class="fw-bold font_14">Sub Total <span class="pull-right">$230.00</span></h6>
		<h6 class="fw-bold mt-3 font_14">(+) Shipping <span class="pull-right">$20.00</span></h6>
		<hr> 
		<h6 class="fw-bold font_14">Total <span class="pull-right">$250.00</span></h6><br>
		 <h5>PAYMENTS</h5>
	     <hr class="line">
		 <div class="form-check mt-3">
        <input type="radio" class="form-check-input" id="customCheck1">
        <label class="form-check-label" for="customCheck1">Check Payments</label>
    </div>
		 <div class="form-check mt-2">
        <input type="radio" class="form-check-input" id="customCheck1">
        <label class="form-check-label" for="customCheck1">Cash On Delivery</label>
    </div>
		 <div class="form-check mt-2">
        <input type="radio" class="form-check-input" id="customCheck1">
        <label class="form-check-label" for="customCheck1">PayPal</label>
    </div>
		 <h6 class="mt-3"><a class="button" href="#">PROCEED TO CHECKOUT</a></h6>
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