@extends('layouts.layout')

@section('content')
<section id="basic-horizontal-layouts">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <h1>Create Category</h1>
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i data-feather="plus"></i> Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Your other scripts can be placed here --}}
@endsection
