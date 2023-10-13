@extends('layouts.layout')

@section('content')
<section  id="basic-horizontal-layouts">
        <div class="row">
        <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
    <h1>Create Category</h1>

    <form action="{{ route('categories.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- <script>
        @vite(['resources/assetsback/vendors/js/vendors.min.js'])
        @vite(['resources/assetsback/js/core/app-menu.js'])
        @vite(['resources/assetsback/js/core/app.js'])
    </script> --}}
@endsection
