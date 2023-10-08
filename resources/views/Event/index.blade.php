@extends('Event.event') <!-- Assuming you have a layout file -->

@section('content')
<div class="container">
    <h1>Event List</h1>
    <a href="{{ route('Event.create') }}" class="button p-3 pt-2 pb-2">Create Event</a>

    <div class="card-deck mt-3">
        @foreach($events as $event)
        <div class="card mb-3 bg-dark text-white">
            <div class="card-body">
                <h5 class="card-title">{{ $event->name }}</h5>
                <p class="card-text">{{ $event->description }}</p>
                <p class="card-text"><strong>Date:</strong> {{ $event->date }}</p>
                <p class="card-text"><strong>Owner:</strong> {{ $event->owner }}</p>
                <a href="{{ route('Event.show', $event->id) }}" class="button p-3 pt-2 pb-2">ViewDetails</a>
                <a href="{{ route('Event.edit', $event->id) }}" class="button p-3 pt-2 pb-2">Edit</a>
                <form action="{{ route('Event.destroy', $event->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button p-3 pt-2 pb-2" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                    </form>
                <!-- Add other actions like Edit and Delete here -->
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

