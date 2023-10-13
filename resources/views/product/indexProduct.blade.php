@extends('layouts.layout')

@section('content')
<div class="table-responsive">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@include('partials.deleteProductModal')


    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>creation_date</th>
                <th>Price</th>
                <th>Quantity</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $products)
            <tr>
               
              
           <td> {{$products->title}} </td>
           <td> {{$products->description}} </td>
           <td> {{$products->creation_date}} </td>
           <td> {{$products->price}} </td>
           <td> {{$products->quantity}} </td>

           <td>
            @if($products->image_url)
            <img src="{{ asset( 'uploads/product/' . $products->image_url) }}" alt="Product Image" style="max-width: 100px; max-height: 100px;">
        @else
            No Image
        @endif
           </td>

           <td>
            <a  href="{{ url('/admin/product/' . $products->id. '/edit') }}" class="btn btn-primary btn-sm">
                Edit
            </a>
        </td>
        <td>
           
        
                <button type="submit" data-product-id="{{ $products->id }}" data-bs-target="#deleteProductModal" class="btn btn-danger  btn-sm deleteProductBtn ">
                    Delete
                </button>
        </td>
        
        
        </tr>
           
            @endforeach
            
           
        </tbody>
    </table>

    
</div>
</div>
@section('scriptt')
<script>
    $(document).ready(function() {
        $('.deleteProductBtn').click(function(e) {
            e.preventDefault();
            var product_id= $(this).data('product-id');
            $('#product_id').val(product_id);
            $('#deleteProductModal').modal('show');
        });
    });
</script>
@endsection

@endsection