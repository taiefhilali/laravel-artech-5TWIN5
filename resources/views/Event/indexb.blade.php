@extends('layouts.layout')

@section('content')
    <h1>Events</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Owner</th>
                <th>Category</th>
                <th>image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ date('Y-m-d', strtotime($event->date)) }}</td>
                    <td>{{ $event->owner }}</td>
                    <td>{{ $event->category->name }}</td>
                    <td>    <img src="{{ asset('uploads/event/' . $event->image) }}" alt="{{ $event->name }}" class="img-thumbnail" width="100">
</td>
                    <td>
                        <form action="{{ route('Event.destroyb', $event) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
