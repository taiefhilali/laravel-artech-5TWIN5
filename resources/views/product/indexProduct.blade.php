@extends('layouts.layout')

@section('content')
<div class="table-responsive">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

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
            <a href="" class="btn btn-primary btn-sm">
                Edit
            </a>
        </td>
        <td>
            <form action="" method="POST">
                @csrf
                @method('DELETE')
        
                <button type="submit" class="btn btn-danger btn-sm">
                    Delete
                </button>
            </form>
        </td>
        
        
        </tr>
           
            @endforeach
            
           
        </tbody>
    </table>

    
</div>
</div>

@endsection