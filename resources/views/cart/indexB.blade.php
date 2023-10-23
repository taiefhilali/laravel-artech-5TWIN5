@extends('layouts.layout')

@section('content')
<div class="table-responsive">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<br>
<div class="mt-4">
    <a href="{{ route('cart.create') }}" class="btn btn-success">
        <i data-feather="plus"></i> Cart
    </a>
</div>
<br>
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Commande</th>
                <th>Quantity</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $carts)
            <tr>
               
              
           <td>{{ $carts->user->name }}</td> 
           <td>{{ $carts->commande->name ?? 'Nom inconnu' }}</td>
           <td> {{$carts->quantity}} </td>

         
           <td>
            <a href="{{ route('cart.editB', $carts->id) }}" class="btn btn-primary btn-sm">
                <i data-feather="edit"></i>
            </a>
        </td>
        <td>
            <form action="{{ route('cart.destroy', $carts->id) }}" method="POST">
                @csrf
                @method('DELETE')
        
                <button type="submit" class="btn btn-danger btn-sm">
                    <i data-feather="trash-2"></i>
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