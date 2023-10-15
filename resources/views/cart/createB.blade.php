@extends('layouts.layout')

<head>
    
</head>

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter un Cart</div>

                <div class="card-body">
                    <form action="{{ route('cart.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="user_id">User ID</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach(\App\Models\User::all() as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="commande_id">Commande ID</label>
                            <select name="commande_id" id="commande_id" class="form-control">
                                @foreach(\App\Models\Commande::all() as $commande)
                                    <option value="{{ $commande->id }}">{{ $commande->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="quantite">Quantity</label>
                            <input type="number" name="quantite" id="quantite" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i data-feather="plus"></i>
                            Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection