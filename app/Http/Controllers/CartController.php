<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

use App\Models\Commande;

use Illuminate\Support\Facades\DB;
use PDF;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::all();
        return view('cart.indexB', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cart.createB');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'commande_id' => 'required|integer',
            'quantity' => 'required|integer',
            // Ajoutez d'autres champs si nécessaire
        ]);
    
        Cart::create($validatedData);
        return redirect()->route('cart.indexB')->with('success', 'Cart ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('cart.show', compact('cart'));
    }

    // public function showCart() {
    //     //        $cartItems = Cart::where('user_id', auth()->id())->get();
    //     $cartItems = Cart::where('user_id', 1)->get();
    //     $cartItems = Cart::with('product')->where('user_id', 1)->get();

    //     //dd($cartItems);
    //     return view('cart.cart', compact('cartItems')); // Assurez-vous de remplacer 'cart.show' par le nom réel de votre vue.
    // }

    public function showCart() {
        // $cartItems = Cart::where('user_id', auth()->id())->get();
        $perPage = 2; // Le nombre de produits que vous souhaitez afficher par page

        // $cartItems = Cart::with('product')->where('user_id', 1)->get();
        $cartItems = Cart::with('product')->where('user_id', 1)->paginate($perPage);

    
        // Retourne la vue avec les éléments du panier
        return view('cart.cart', compact('cartItems')); 
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cart = Cart::find($id);
        // return view('cart.editB', compact('carts'));
        return view('cart.editB', ['cart' => $cart]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'commande_id' => 'required|integer',
            'quantity' => 'required|integer',
            // Ajoutez d'autres champs si nécessaire
        ]);

        $cart = Cart::find($id);

    
        $cart->update($validatedData);
        return redirect()->route('cart.indexB')->with('success', 'Cart mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cart = Cart::find($id);
        $cart->delete();
    return redirect()->route('cart.indexB')->with('success', 'Cart supprimé avec succès.');
    }


    public function addToCart(Request $request, $productId)
{
    $product = Product::find($productId);
    
    $cart = new Cart;
    $cart->product_id = $product->id;
    $cart->user_id = auth()->id();
    $cart->quantity = $request->input('quantity', 1); // Default to 1 if not provided
    $cart->save();

    return redirect()->back()->with('success', 'Produit ajouté au panier!');
}

public function updateProductInCart(Request $request, $cartItemId)
{
    // Valider les données entrantes
    $request->validate([
        'product_id' => 'required|exists:products,id', // s'assurer que le product_id existe dans la table products
        'quantity'   => 'required|integer|min:1'        // s'assurer que la quantité est un entier positif
    
    ]);

    // Récupérer l'élément du panier par son ID
    $cartItem = Cart::findOrFail($cartItemId);

    $cartItem->update([
        'product_id' => $request->input('product_id'),
        'quantity'   => $request->input('quantity')     // Corrigez le nom du champ, il y avait une faute de frappe: 'qunatity'
    ]);

    return redirect()->back()->with('success', 'Produit mis à jour dans le panier avec succès!');
}


// public function confirm(Request $request) {
//     // Récupérez l'utilisateur actuel et son panier
//     $user = auth()->user();
//     $cart = $user->cart; // Assurez-vous d'avoir une relation cart dans votre modèle User

//     if ($cart) {
//         // Parcourez les articles du panier et mettez à jour leur statut à "confirmed"
//         foreach ($cart->items as $cartItems) {
//             $cartItems->update(['status' => 'confirmed']);
//         }
//         return redirect()->route('cart.cart')->with('success', 'Les articles ont été confirmés!');
//     } else {
//         return redirect()->route('cart.cart')->with('error', 'Aucun panier trouvé pour cet utilisateur.');
//     }
// }


public function confirm(Request $request) {
    // Vérifiez si l'utilisateur est authentifié
    if (!auth()->check()) {
        return redirect()->route('cart.cart')->with('error', 'Veuillez vous connecter.');
    }

    // Récupérez l'utilisateur actuel et son panier
    $user = auth()->user();
    $cart = $user->cart;

    if (!$cart) {
        return redirect()->route('cart.cart')->with('error', 'Aucun panier trouvé pour cet utilisateur.');
    }

    // Utilisez une transaction pour vous assurer que toutes les opérations de base de données s'exécutent correctement
    DB::transaction(function() use ($cart) {
        // Parcourez les articles du panier et mettez à jour leur statut à "confirmed"
        foreach ($cart->items as $cartItems) {
            $cartItems->update(['status' => 'confirmed']);
        }
    });

    return redirect()->route('cart.cart')->with('success', 'Les articles ont été confirmés!');
}


public function exportCartToPDF() {
    // Récupérez les articles du panier pour l'utilisateur connecté
    $cart = Cart::with('product')->where('user_id', 1)->get();

    // Générer le PDF
    $pdf = PDF::loadView('cart.invoice', compact('cart'));

    // Retourner le PDF à l'utilisateur
    return $pdf->download('invoice.pdf');
}


// public function exportCartToPDF($commande_id) {
//     $commande = Commande::with('products')->find($commande_id);
//     if (!$commande) {
//         return redirect()->back()->with('error', 'Commande non trouvée.');
//     }

//     $pdf = PDF::loadView('pdf.invoice', ['commande' => $commande]);
//     return $pdf->download('commande_'.$commande_id.'.pdf');
// }


}
