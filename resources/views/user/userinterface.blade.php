@extends('layouts.layoutfront')
@section('content')

@include('museums/indexf', ['museums' => $museums])


        @endsection