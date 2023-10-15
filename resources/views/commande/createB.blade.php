@extends('layouts.layout')

<head>
    
</head>
@section('content')
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal Form</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('commande.store') }}" enctype="multipart/form-data" class="form form-horizontal">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="name">Name</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="name" class="form-control" name="name"
                                                placeholder="Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="description">Description</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="description" class="form-control" name="description"
                                                placeholder="Description" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="date">Date</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="date" id="date" class="form-control" name="date"
                                                placeholder="Date" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="price">Price</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="number" id="price" class="form-control" name="price"
                                                placeholder="Price" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="image">image</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="file" id="image" class="form-control" name="image" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary me-1">
                                        <i data-feather="plus"></i>
                                        Order</button>
                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Basic Horizontal form layout section end -->

    {{-- <script>
        @vite(['resources/assetsback/vendors/js/vendors.min.js'])
        @vite(['resources/assetsback/js/core/app-menu.js'])
        @vite(['resources/assetsback/js/core/app.js'])
    </script> --}}
@endsection
