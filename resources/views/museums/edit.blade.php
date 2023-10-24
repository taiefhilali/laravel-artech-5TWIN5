@extends('layouts.layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>
        Add new museum
        </h3>
    </div>
    
    <div class="card-body">
        <form action="{{ url('museum/' . $museum->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="{{$museum->name}}" class="form-control" required>
                </div>
                </div>

                <div class="col-6">
                <div class="form-group">
                    <label for="phone_number">phone number:</label>
                    <input type="text" name="phone_number" id="phone_number" value="{{$museum->phone_number}}" class="form-control" required>
                </div>
                </div>

                <div class="col-12 mb-50">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea type="text" name="description" id="description" class="form-control" required>{{$museum->description}}</textarea>
                </div>
                </div>

                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" value="{{$museum->address}}" class="form-control" required>
                </div>
                </div>

                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="zip_code">Zip code:</label>
                    <input type="number" name="zip_code" id="zip_code" value="{{$museum->zip_code}}" class="form-control" required>
                </div>
                </div>

                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="website">Website:</label>
                    <input type="text" name="website" id="website" value="{{$museum->website}}" class="form-control" required>
                </div>
                </div>

                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" value="{{$museum->email}}" class="form-control" required>
                </div>
                </div>


                <div class="col-6">
                <div class="form-group">
                    <label for="founding_date">Founding date:</label>
                    <input type="date" name="founding_date" id="founding_date" value="{{$museum->founding_date}}" class="form-control" required>
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