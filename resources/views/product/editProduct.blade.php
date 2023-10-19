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
      <div class="col">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            width:80%;
            margin-left:110px
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Edit Product</h2>
            <form action="{{ url('admin/editProduct/'.$Product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text"  value="{{ $Product->title }} " id="form3Example1" class="form-control" name="title" />
                    <label class="form-label" for="form3Example1">Title</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" value="{{ $Product->artist }} " id="form3Example2" class="form-control" name="artist"/>
                    <label class="form-label" for="form3Example2">Artist name</label>
                  </div>
                </div>
              </div>

              <div class="form-outline mb-4">
                <input type="text" value="{{ $Product->title }} " class="form-control" name="description" style="height:150px;width:100%;resize:none"/>
                <label class="form-label" for="form3Example4">Description</label>
              </div>

              <div class="form-outline mb-4">
                <input type="date"  value="{{ date('Y-m-d', strtotime($Product->creation_date)) }}" class="form-control" name="creation_date"/>
                <label class="form-label" for="form3Example4">Creation date</label>
              </div>

              <div class="form-outline mb-4">
                <input type="text" value="{{ $Product->medium }} "class="form-control" name="medium" />
                <label class="form-label" for="form3Example3">Medium</label>
              </div>

              <div class="form-outline mb-4">
                <input type="text" value="{{ $Product->dimensions }} "class="form-control" name="dimensions" placeholder="example: 73.7 cm × 92.1 cm" />
                <label class="form-label" for="form3Example4">Dimension</label>
              </div>

              <div class="form-outline mb-4" >
                <input type="file" id="form3Example3" class="form-control" name="image_url"  />
                <img  src="{{ asset( 'uploads/product/' . $Product->image_url) }}" style="width:200px;height:200px;" />
              </div>


              <div class="form-outline mb-4">
                <input type="number" step="0.01" value="{{ floatval($Product->price) }}" class="form-control" name="price" />
                <label class="form-label" for="form3Example4">Price</label>
              </div>

              <div class="form-outline mb-4">
                <input type="number" value="{{ floatval($Product->price) }}"  class="form-control" name="quantity" />
                <label class="form-label" for="form3Example4">Quantity</label>
              </div>


              <div class="form-outline mb-4">
                  <select id="productType"  name="product_type_id" class="form-control" >
                      @foreach ($productType as $type)
                          <option value="{{ $type->id }}">{{ $type->name }}</option>
                      @endforeach
                  </select>
                  <label class="form-label" for="productType">Catalog</label>
              </div>


              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Update Product
              </button>
            </form>
          </div>
        </div>
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