@extends('Event.details')

@section('content')
    <div class="container">
        <h1>Edit Event</h1>
        <form class="dark-form form-horizontal" method="POST" action="{{ route('Event.update', $event->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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
                <label for="owner">Place:</label>
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

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <button type="submit" class="button p-3 pt-2 pb-2">Update</button>
        </form>
    </div>

    <!-- Include this script to show simple JavaScript alert for errors -->
    <script>
        @if (count($errors) > 0)
            var errorMessage = '';
            @foreach ($errors->all() as $error)
                errorMessage += '{{ $error }}<br>';
            @endforeach

            var errorContainer = document.createElement('div');
            errorContainer.innerHTML = errorMessage;
            errorContainer.style.padding = '10px';
            errorContainer.style.backgroundColor = '#ff9999';
            errorContainer.style.border = '1px solid #ff0000';
            errorContainer.style.borderRadius = '5px';
            errorContainer.style.color = '#ff0000';

            document.body.appendChild(errorContainer);
        @endif
    </script>
@endsection
