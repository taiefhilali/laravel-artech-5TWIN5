{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Facture Panier</h2>

<table>
    <thead>
        <tr>
            <th>Produit</th>
            <th>Prix Unitaire</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cart as $item)
            <tr>
                @if($item->product)
                <td>{{ $item->product->title }}</td>
                @else
                <td>Produit non disponible</td>
            @endif
            @if($item->product)

                <td>{{ $item->product->price }}€</td>
                @else
                <td>Produit non disponible</td>
            @endif
            @if($item->product)

                <td>{{ $item->quantity }}</td>
                @else
                <td>Produit non disponible</td>
            @endif
            @if($item->product)

                <td>{{ $item->product->price * $item->quantity }}€</td>
                @else
    <td>Produit non disponible</td>
@endif
            </tr>
        @endforeach
    </tbody>
  
</table>

</body>
</html>
 --}}

 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f5f7;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        table th, table td {
            padding: 15px 10px;
        }
        table th {
            background-color: #3498db;
            color: #fff;
        }
        table tbody tr:nth-child(odd) {
            background-color: #ecf0f1;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Facture Panier</h2>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Produit</th>
                <th>Prix Unitaire</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $item)
                <tr>
                    @if($item->product)
                    <td>{{ $item->product->title }}</td>
                    @else
                    <td>Produit non disponible</td>
                @endif
                @if($item->product)
                    <td>{{ $item->product->price }}€</td>
                @else
                    <td>Produit non disponible</td>
                @endif
                @if($item->product)
                    <td>{{ $item->quantity }}</td>
                @else
                    <td>Produit non disponible</td>
                @endif
                @if($item->product)
                    <td>{{ $item->product->price * $item->quantity }}€</td>
                @else
                    <td>Produit non disponible</td>
                @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS et dépendances (Optionnel, mais peut être utile pour certains composants) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

