@extends('layouts.layout')

<head>
    
</head>
@section('Edit')



    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal Form</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('commande.update', ['id' => $commande->id]) }}" enctype="multipart/form-data" class="form form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="name">Name</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="name" class="form-control" name="name"
                                                placeholder="Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="description">Description</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="description" class="form-control" name="description"
                                                placeholder="Description" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="date">Date</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="date" id="date" class="form-control" name="date"
                                                placeholder="Date" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="price">Price</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="number" id="price" class="form-control" name="price"
                                                placeholder="Price" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="image">image</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="file" id="image" class="form-control" name="image" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="region">Région</label>
                                    <select class="form-control" id="region" name="region">
                                        <option value="Tunis" @if ($commande->region === 'Tunis') selected @endif>Tunis</option>
                                        <option value="Ariana" @if ($commande->region === 'Ariana') selected @endif>Ariana</option>
                                        <option value="Ben_Arous" @if ($commande->region === 'Ben_Arous') selected @endif>Ben Arous</option>
                                        <option value="Nabeul" @if ($commande->region === 'Nabeul') selected @endif>Nabeul</option>
                                        <!-- Ajoutez les autres options en fonction de vos besoins -->
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="quantite_produits">Quantité de Produits</label>
                                    <input type="number" class="form-control" id="quantite_produits" name="quantite_produits" value="{{ $commande->quantite_produits }}">
                                </div>
                            
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Basic Horizontal form layout section end -->

  
@endsection
