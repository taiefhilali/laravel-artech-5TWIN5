
@extends('Event.event') 

@section('content')
@vite(['resources/css/app.css'])

<div class="col-md-9">

    <div class="blog_1r">
    <a href="{{ route('Event.create') }}" class="button p-3 pt-2 pb-2">Create Event</a>

        <div class="blog_1ri row">
            @foreach($events as $event)
            <div class="col-md-7">
                <div class="blog_1ril clearfix position-relative">
                    <div class="blog_1ril1 clearfix">
                        <div class="grid clearfix">
                            <figure class="effect-jazz mb-0">
                                <a href="{{ route('Event.show', $event->id) }}"><img src="{{ Vite::asset('resources/assetsfront/img/18.jpg') }}" class="w-100" alt="{{ $event->name }}"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="blog_1ril2 w-100 clearfix position-absolute text-end">
                        <span class="d-inline-block fs-2 bg-white col_dark"><i class="fa fa-edit"></i></span>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-5">
                <div class="blog_1rir ps-4 pe-3">
                    <h5 class="mb-4"><a href="{{ route('Event.show', $event->id) }}">{{ $event->name }}</a></h5>
                    <p class="font_14">{{ $event->description }}</p>
                    <a href="{{ route('Event.show', $event->id) }}" class="button p-3 pt-2 pb-2">ViewDetails</a>
                <a href="{{ route('Event.edit', $event->id) }}" class="button p-3 pt-2 pb-2">Edit</a>
                <form action="{{ route('Event.destroy', $event->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button p-3 pt-2 pb-2" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                    </form>                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

