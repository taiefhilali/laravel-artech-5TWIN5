@extends('Event.event')
@section('content')
<div class="container">
    <h1>List of Events</h1>
    <div class="blog_1r">
	  <div class="blog_1ri row">
	   <div class="col-md-7">
	    <div class="blog_1ril clearfix position-relative">
		 <div class="blog_1ril1 clearfix">
		   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img src="{{Vite::asset('resources/assetsfront/img/18.jpg')}}" class="w-100" alt="abc"></a>
					<a href="blog_detail.html"><img src="img/18.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		 </div>

</div>

<div class="blog_1ril2 w-100 clearfix position-absolute  text-end">
		   <span class="d-inline-block fs-2 bg-white col_dark"><i class="fa fa-edit"></i></span>
		 </div>
		</div>
	   </div>
	   <div class="col-md-5">
	    <div class="blog_1rir ps-4 pe-3">
        <h2>{{ $event->name }}</h2>
		  <h5 class="mb-4"><a href="blog_detail.html">INTEGER AT DIAM GRAVIDA FRINGILLA NIBH PRETI PURUS</a></h5>
		  <p class="font_14"> {{ $event->description }}</p>
          <p><strong>Date:</strong> {{ $event->date }}</p>
            <p><strong>Owner:</strong> {{ $event->owner }}</p>
		  <h6 class="font_14 mb-0 mt-4"><a class="button p-3 pt-2 pb-2" href="blog_detail.html">READ MORE</a></h6>
		</div>

	   </div>
       <div class="mt-3">
        <a href="{{ route('Event.index') }}" class="btn btn-primary">Back to Events</a>
		
 
    </div>
	@endsection
