@extends('layouts.layout')

<head>
    
</head>
@section('content')
    <!-- Basic Horizontal form layout section start -->
<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Add Product</h2>
            <form action="{{ url('admin/addProduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" name="title" />
                    <label class="form-label" for="form3Example1">Title</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" name="artist"/>
                    <label class="form-label" for="form3Example2">Artist name</label>
                  </div>
                </div>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example4" class="form-control" name="description" style="height:150px;width:100%;resize:none"/>
                <label class="form-label" for="form3Example4">Description</label>
              </div>

              <div class="form-outline mb-4">
                <input type="date" id="form3Example4" class="form-control" name="creation_date"/>
                <label class="form-label" for="form3Example4">Creation date</label>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control" name="medium" />
                <label class="form-label" for="form3Example3">Medium</label>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example4" class="form-control" name="dimensions" placeholder="example: 73.7 cm × 92.1 cm" />
                <label class="form-label" for="form3Example4">Dimension</label>
              </div>

              <div class="form-outline mb-4">
                <input type="file" id="form3Example3" class="form-control" name="image_url" />
                <label class="form-label" for="form3Example3">Image</label>
              </div>


              <div class="form-outline mb-4">
                <input type="number" step="0.01" id="form3Example4" class="form-control" name="price" />
                <label class="form-label" for="form3Example4">Price</label>
              </div>

              <div class="form-outline mb-4">
                <input type="number" id="form3Example4" class="form-control" name="quantity" />
                <label class="form-label" for="form3Example4">Quantity</label>
              </div>


              <div class="form-outline mb-4">
                  <select id="productType" name="product_type_id" class="form-control" >
                      @foreach ($productType as $type)
                          <option value="{{ $type->id }}">{{ $type->name }}</option>
                      @endforeach
                  </select>
                  <label class="form-label" for="productType">Catalog</label>
              </div>


              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                <i data-feather="plus"></i> Product
              </button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
      <img src="{{Vite::asset('resources/assetsback/images/Product.png')}}" class="w-100" alt="abc" style="height:1100px" >        
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

    {{-- <script>
        @vite(['resources/assetsback/vendors/js/vendors.min.js'])
        @vite(['resources/assetsback/js/core/app-menu.js'])
        @vite(['resources/assetsback/js/core/app.js'])
    </script> --}}
@endsection