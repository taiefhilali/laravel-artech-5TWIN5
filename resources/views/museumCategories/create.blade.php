@extends('layouts.layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>
        Add new museum category
        </h3>
    </div>
    
    <div class="card-body">
        <form action="{{ url('category') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6 mb-50">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                </div>

                <div class="col-12 mb-50">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea type="text" name="description" id="description" class="form-control" required></textarea>
                </div>
                </div>

            </div>

            
        <div class="row my-1 mx-0">
            <button type="submit" class="btn btn-primary">
        <i data-feather="plus"></i>
        New museum category</button>
        </div>

        </form>

    </div>

</div>
</div>


@endsection