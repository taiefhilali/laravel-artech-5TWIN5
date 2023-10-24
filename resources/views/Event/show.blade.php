@extends('Event.details') <!-- Assuming you have a layout file -->

@section('content')
<div class="container">
    <h1>List of Events</h1>

    <div class="card mb-3 bg-dark text-white">
        <div class="row g-0">
            <div class="col-md-7">
                <div class="blog_1ril1 clearfix">
                    <div class="grid clearfix">
                        <figure class="effect-jazz mb-0">
                        <img src="{{ asset('uploads/event/' . $event->image) }}" class="w-100" alt="{{ $event->name }}">
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
                    <p><strong>Category:</strong> {{ $event->category ? $event->category->name : 'Category not specified' }}</p>
    
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="blog_1r">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#participateModal">
    Participate
  </button>

  <div class="modal fade" id="participateModal" tabindex="-1" aria-labelledby="participateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="participateModalLabel">Participate in {{ $event->name }}?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to participate in {{ $event->name }}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="swal({ title: 'Are you sure you want to participate in {{ $event->name }}?', text: '', type: 'warning', showCancelButton: true, confirmButtonText: 'Participate', cancelButtonText: 'Cancel', closeOnConfirm: false }, function(result) { if (result.value) { window.location.href = '{{ route('Event.participate', $event) }}'; } });">Participate</button>
        </div>
      </div>
    </div>
  </div>
</div> -->

    <div class="mt-3">
        <a href="{{ route('Event.index') }}"class="button p-3 pt-2 pb-2">Back to Events</a>
    </div>
</div>
@endsection
