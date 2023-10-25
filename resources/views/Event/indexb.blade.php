@extends('layouts.layout')
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
@section('content')

    <h1>Events</h1>
    <div class="container">
        <div class="eventsearch">
            <input type="search" name="eventsearch" id="eventsearch" placeholder="Search product..."
                class="form-control" />
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Owner</th>
                <th>Category</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="alldata">
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ date('Y-m-d', strtotime($event->date)) }}</td>
                    <td>{{ $event->owner }}</td>
                    <td>{{ $event->category->name }}</td>
                    <td>
                        <img src="{{ asset('uploads/event/' . $event->image) }}" alt="{{ $event->name }}" class="img-thumbnail" width="100">
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
        <tbody id="Content" class="searchdata"></tbody>
    </table>
</div>

<script type="text/javascript">
    $('#eventsearch').on('keyup', function () {
        $value = $(this).val();
        if ($value) {
            $('.alldata').hide();
            $('.searchdata').show();
        } else {
            $('.alldata').show();
            $('.searchdata').hide();
        }
        $.ajax({
            type: 'get',
            url: '{{ route('Event.eventsearch') }}', // Use the named route
            data: { 'eventsearch': $value },
            success: function (data) {
                $('#Content').html(data);
            }
        });
    });
</script>
@endsection
