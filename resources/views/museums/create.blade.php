@extends('layouts.layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>
        Add new museum
        </h3>
    </div>
    
    <div class="card-body">
        <form action="{{ url('museum') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                    @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                </div>

                <div class="col-6">
                <div class="form-group">
                    <label for="phone_number">phone number:</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" required>
                    
                </div>
                </div>

                <div class="col-12 mb-50">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea type="text" name="description" id="description" class="form-control" required></textarea>
                </div>
                </div>

                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>
                </div>

                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="zip_code">Zip code:</label>
                    <input type="number" name="zip_code" id="zip_code" class="form-control" required>
                </div>
                </div>

                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="website">Website:</label>
                    <input type="text" name="website" id="website" class="form-control" required>
                </div>
                </div>

                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
                </div>


                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="email">Image:</label>
                    <input type="file" name="image">
                </div>
                </div>


                <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                </div>


                <div class="col-6">
                <div class="form-group">
                    <label for="founding_date">Founding date:</label>
                    <input type="date" name="founding_date" id="founding_date" class="form-control" required>
                </div>
                </div>
            </div>

            
        <div class="row my-1 mx-0">
            <button type="submit" class="btn btn-primary">
        <i data-feather="plus"></i>
        New museum</button>
        </div>

        </form>

    </div>

</div>
</div>


@endsection