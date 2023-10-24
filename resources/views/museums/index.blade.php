@extends('layouts.layout')

@section('title', 'Advance Card')


@section('content')

<div class="row m-0 mb-1">
<a href="{{url('/museum/create')}}" class="btn btn-primary">
                    Add new museum
        </a>
</div>

<div class="row">
@foreach($museums as $item)
          <!-- Developer Meetup Card -->
  <div class="col-lg-4 col-md-6 col-12">
    <div class="card card-developer-meetup">
      <div class="meetup-img-wrapper rounded-top text-center">
        <img src="{{ asset('storage/' . $item->image) }}" alt="Meeting Pic" height="170" />
      </div>
      <div class="card-body">
        <div class="meetup-header d-flex align-items-center">
          <div class="my-auto">
            <h4 class="card-title mb-0">{{$item->name}}</h4>
            <small class="text-muted mb-25">{{$item->category_name}}</small>
            <p class="card-text mb-0">{{$item->description}}</p>
          </div>
        </div>
        <div class="d-flex flex-row meetings">
          <div class="avatar bg-light-primary rounded me-1">
            <div class="avatar-content">
              <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
            </div>
          </div>
          <div class="content-body">
            <h6 class="mb-0">{{$item->founding_date}}</h6>
            <small>Founding date</small>
          </div>
        </div>
        <div class="d-flex flex-row meetings">
          <div class="avatar bg-light-primary rounded me-1">
            <div class="avatar-content">
              <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
            </div>
          </div>
          <div class="content-body">
            <h6 class="mb-0">{{$item->address}}</h6>
            <small>{{$item->zip_code}}</small>
          </div>
        </div>

        <div class="row justify-content-even mt-1">
        <div class="col-auto">
        <a href="{{url('/museum/' . $item->id)}}" class="btn btn-primary">
            Details
        </a>
        </div>

        <div class="col-auto">
        <a href="{{url('/museum/' . $item->id . '/edit')}}" class="btn btn-warning">
                    Edit
        </a>
        </div>

        <div class="col-auto">

        <form method="POST" action="{{ url('/museum' . '/' . $item->id)}}" style="">
        {{ method_field('DELETE')}}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger" title="Delete museum" onclick="retun confirm('Confirm delete?')">
                    Delete
        </button>
        </form>

        </div>

        </div>

        



      </div>
    </div>
  </div>
  <!--/ Developer Meetup Card -->

@endforeach
</div>


@endsection
