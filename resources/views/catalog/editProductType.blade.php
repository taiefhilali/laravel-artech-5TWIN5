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
            <h2 class="fw-bold mb-5">Edit Catalog</h2>
            <form action="{{ url('admin/editCatalog/'.$ProductType->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control" value="{{ $ProductType->name }} " name="name"/>
                <label class="form-label" for="form3Example3">Name</label>
                @error('name')
                  <i class="fa fa-exclamation-triangle" style="color:red"></i>
                  <span class="text-danger"><b>{{ $message }}</b></span>
                 @enderror
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="text" id="form3Example4" class="form-control" value="{{ $ProductType->description }} " name="description" style="height:150px;width:100%;resize:none"/>
                <label class="form-label" for="form3Example4">Description</label>
                @error('description')
                  <i class="fa fa-exclamation-triangle" style="color:red"></i>
                  <span class="text-danger"><b>{{ $message }}</b></span>
                 @enderror
              </div>

              <div class="form-outline mb-4">
                <input type="file" id="form3Example4" value="{{ $ProductType->image }} " class="form-control" name="image" />
                <img  src="{{ asset( 'uploads/catalog/' . $ProductType->image) }}" style="width:200px;height:200px;" />
                <label class="form-label" for="form3Example4">Image</label>
                @error('image')
                  <i class="fa fa-exclamation-triangle" style="color:red"></i>
                  <span class="text-danger"><b>{{ $message }}</b></span>
                 @enderror
              </div>


              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Update Catalog
              </button>

    
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
      <img src="{{Vite::asset('resources/assetsback/images/Catalog.png')}}" class="w-100" alt="abc" >        

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