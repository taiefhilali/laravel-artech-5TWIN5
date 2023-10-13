@extends('Event.details')

@section('content')
<div class="container">
    <h1>Edit Event</h1>
    <form method="POST" action="{{ route('Event.update', $event->id) }}">
        @csrf
        @method('PUT') {{-- Use PUT method for updating --}}
        
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $event->name }}" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" required>{{ $event->description }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $event->date }}" required>
        </div>
        
        <div class="form-group">
            <label for="owner">Owner:</label>
            <input type="text" name="owner" id="owner" class="form-control" value="{{ $event->owner }}" required>
        </div>
        
        <div class="form-group">
        <label for="category_id" class="form-label">Category</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        </div>

        
        <button type="submit" class="button p-3 pt-2 pb-2" >Update</button>
    </form>
</div>
@endsection
