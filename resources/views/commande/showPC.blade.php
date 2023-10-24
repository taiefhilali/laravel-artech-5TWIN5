@extends('layouts.layout')

@section('content')
<div class="table-responsive">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@include('partials.deleteProductModal')

<br>
<br>
<br>


<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>creation_date</th>
            <th>Price</th>

            <th>Quantity</th>
            <th>Image</th>


            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($commande->products as $products)
        <tr>
           
          
       <td> {{$products->title}} </td>
       <td> {{$products->description}} </td>
       <td> {{$products->creation_date}} </td>
       <td> {{$products->price}} </td>
       <td> {{$products->quantity}} </td>

       {{ $products->pivot->quantity }}


       <td>
        @if($products->image_url)
        <img src="{{ asset( 'uploads/product/' . $products->image_url) }}" alt="Product Image" style="max-width: 100px; max-height: 100px;">
    @else
        No Image
    @endif
       </td>

       <td>
        <a  href="{{ url('/admin/product/' . $products->id. '/edit') }}" class="btn btn-primary btn-sm">
            <i data-feather="edit"></i>
        </a>
    </td>
    <td>
       
    
            <button type="submit" data-product-id="{{ $products->id }}" data-bs-target="#deleteProductModal" class="btn btn-danger  btn-sm deleteProductBtn ">
                <i data-feather="trash-2"></i>
            </button>
    </td>
    
    
    </tr>
       
        @endforeach
        
       
    </tbody>
</table>
@endsection