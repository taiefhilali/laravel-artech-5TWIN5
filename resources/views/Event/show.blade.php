@extends('Event.event') <!-- Assuming you have a layout file -->

@section('content')
<div class="container">
    <h1>List of Events</h1>

    <div class="card mb-3 bg-dark text-white">
        <div class="row g-0">
            <div class="col-md-7">
                <div class="blog_1ril1 clearfix">
                    <div class="grid clearfix">
                        <figure class="effect-jazz mb-0">
                            <a href="blog_detail.html"><img src="{{Vite::asset('resources/assetsfront/img/18.jpg')}}" class="w-100" alt="Event Image"></a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card-body">
                    <h2 class="card-title">{{ $event->name }}</h2>
                    <p class="card-text">{{ $event->description }}</p>
                    <p><strong>Date:</strong> {{ $event->date }}</p>
                    <p><strong>Owner:</strong> {{ $event->owner }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('Event.index') }}"class="button p-3 pt-2 pb-2">Back to Events</a>
    </div>
</div>
@endsection
