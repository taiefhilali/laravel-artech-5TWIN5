@extends('layouts/layout')


@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/base/pages/page-blog.css') }}" />
@endsection


@section('content')
<!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
    <div class="col-12">
      <div class="card">
        <img
          src="{{ asset('storage/' . $museum->image) }}"
          class="img-fluid card-img-top"
          alt="Blog Detail Pic"
        />
        <div class="card-body">
          <h4 class="card-title">{{$museum->name}}</h4>
          <div class="d-flex">
            <div class="avatar me-50">
              <img src="{{asset('images/portrait/small/avatar-s-7.jpg')}}" alt="Avatar" width="24" height="24" />
            </div>
            <div class="author-info">
              <small class="text-muted me-25">by</small>
              <small><a href="#" class="text-body">Ghani Pradita</a></small>
              <span class="text-muted ms-50 me-25">|</span>
              <small class="text-muted">Jan 10, 2020</small>
            </div>
          </div>
          <p class="card-text mb-2">
            {{$museum->description}}
          </p>

          <hr class="my-2" />


          <ul class="p-0 mb-2">
            <li class="d-block">
              <span class="me-25">-</span>
              <span><b>Founding date: </b>{{$museum->founding_date}}</span>
            </li>
            <li class="d-block">
              <span class="me-25">-</span>
              <span><b>Address: </b>{{$museum->address}}</span>
            </li>
            <li class="d-block">
              <span class="me-25">-</span>
              <span><b>email: </b>{{$museum->email}}</span>
            </li>
            <li class="d-block">
              <span class="me-25">-</span>
              <span><b>Phone number: </b>{{$museum->phone_number}}</span>
            </li>
            <li class="d-block">
              <span class="me-25">-</span>
              <span><b>Category: </b>{{$museum->category_name}}</span>
            </li>
          </ul>

        </div>
      </div>
    </div>
    <!--/ Blog -->
  </div>
</div>
<!--/ Blog Detail -->
@endsection
