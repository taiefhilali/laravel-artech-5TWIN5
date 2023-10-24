@extends('Event.details') <!-- Assuming you have a layout file -->

@section('content')
@vite(['resources/css/app.css'])

<div class="container "> <h1>Create Event</h1>

<form class="dark-form form-horizontal" action="{{ route('Event.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" id="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="owner">Owner:</label>
        <input type="text" name="owner" id="owner" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" class="form-control" required>
    </div>
   

    <button type="submit" class="button p-3 pt-2 pb-2">
        <i data-feather="plus"></i>
       Create Event</button>
    </form>
</div>
@endsection