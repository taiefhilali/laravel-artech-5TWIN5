@extends('Event.form') <!-- Assuming you have a layout file -->

@section('content')

<div class="container">
    <h1>Create Event</h1>

    <form method="POST" action="{{ route('Event.store') }}">
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
    </div>

        <button type="submit" class="button p-3 pt-2 pb-2">Create</button>
    </form>
</div>
@endsection
