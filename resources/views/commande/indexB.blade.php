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
                <th>Name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Price</th>
                <th>Image</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commandes as $commandes)
            <tr>
               
              
           <td> {{$commandes->name}} </td>
           <td> {{$commandes->description}} </td>
           <td> {{$commandes->date}} </td>
           <td> {{$commandes->price}} </td>
           {{-- <td> {{$commandes->image}} </td> --}}

           <td>
            @if($commandes->image)
            <img src="{{ asset( 'images/' . $commandes->image) }}" alt="Commande Image" style="max-width: 100px; max-height: 100px;">
        @else
            No Image
        @endif
           </td>

           <td>
            <a href="{{ route('commande.edit', $commandes->id) }}" class="btn btn-primary btn-sm">
                Edit
            </a>
        </td>
        <td>
            <form action="{{ route('commande.destroy', $commandes->id) }}" method="POST">
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