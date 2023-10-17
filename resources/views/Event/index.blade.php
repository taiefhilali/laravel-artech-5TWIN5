
@extends('Event.event') 

@section('content')
@vite(['resources/css/app.css'])

<div class="col-md-9">

    <div class="blog_1r">

        <div class="blog_1ri row">
            @foreach($events as $event)
            <div class="col-md-7">
                <div class="blog_1ril clearfix position-relative">
                    <div class="blog_1ril1 clearfix">
                        <div class="grid clearfix">
                        <figure class="effect-jazz mb-0" style="position: relative;">
                        <a href="{{ route('Event.show', $event->id) }}">
        @if ($event->image)
        <img src="{{ asset('uploads/event/' . $event->image) }}" class="w-100" alt="{{ $event->name }}">
        @else
            <img src="{{ Vite::asset('resources/assetsfront/img/18.jpg') }}" class="w-100" alt="{{ $event->name }}">
        @endif
    </a>
    <a href="{{ route('Event.edit', $event->id) }}" style="position: absolute; top: 10px; right: 10px;">
        <i class="fa fa-edit"></i>
    </a>
    <form action="{{ route('Event.destroy', $event->id) }}" method="POST" style="position: absolute; top: 40px; right: 10px; ">
    @csrf
    @method('DELETE')
    <button type="submit"  onclick="return confirm('Are you sure you want to delete this event?')" class="bg-transparent border-none">
        <i class="fa fa-trash" ></i> 
    </button>
</form>

</figure>


                        </div>
                    </div>
                  

                </div>
                <hr>
            </div>
            <div class="col-md-5">
                <div class="blog_1rir ps-4 pe-3">
                    <h5 class="mb-4"><a href="{{ route('Event.show', $event->id) }}">{{ $event->name }}</a></h5>
                    <p class="font_14">{{ $event->description }}</p> 
                              </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

