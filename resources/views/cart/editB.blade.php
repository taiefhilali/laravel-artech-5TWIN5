@extends('layouts.layout')

<head>
    
</head>

@section('content')
<div class="container">
    <h2>Edit Cart</h2>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update the Cart</div>

                <div class="card-body">

    <form action="{{ route('cart.update', $cart->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="user_id">Nom d'utilisateur:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach(\App\Models\User::all() as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $cart->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="commande_id">Commande:</label>
            <select name="commande_id" id="commande_id" class="form-control">
                @foreach(\App\Models\Commande::all() as $commande)
                    <option value="{{ $commande->id }}" {{ $commande->id == $cart->commande_id ? 'selected' : '' }}>{{ $commande->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantite">Quantity:</label>
            <input type="number" name="quantite" id="quantite" class="form-control" value="{{ $cart->quantite }}">
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>

</div>
</div>
</div>
</div>
</div>

</div>

@endsection