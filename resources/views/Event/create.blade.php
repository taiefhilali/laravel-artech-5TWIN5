@extends('Event.details') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container">
        <h1>Create Event</h1>
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
                <label for="owner">Place:</label>
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
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>

            <button type="submit" class="button p-3 pt-2 pb-2">
                <i data-feather="plus"></i>
                Create Event
            </button>
        </form>
    </div>

        <!-- Include this script to show simple JavaScript alert for errors -->
       
@endsection
