@extends('layouts.layout')
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
@section('content')
<div class="table-responsive">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@include('partials.deleteProductModal')

<br>

<div class="container">
    <div class="search">
        <input type="search" name="search" id="search" placeholder="Search product ..."
        class="form-control"
        />
    </div>
</div>


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
        <tbody class="alldata" >
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
        <tbody id="Content" class="searchdata" ></tbody>
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
<script type="text/javascript" >
    $('#search').on('keyup',function(){
        $value=$(this).val();
        if($value){
            $('.alldata').hide();
            $('.searchdata').show();
        }
        else{
            $('.alldata').show();
            $('.searchdata').hide();
        }
        $.ajax({
            type: 'get',
            url: '{{URL::to('search')}}',
            data: {'search': $value},
            success: function (data) { 
                $('#Content').html(data);
            }
        });
    })

</script>
@endsection

@endsection