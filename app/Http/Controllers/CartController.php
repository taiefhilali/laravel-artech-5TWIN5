<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;



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
            'quantite' => 'required|integer',
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

    public function showCart() {
        //        $cartItems = Cart::where('user_id', auth()->id())->get();
        $cartItems = Cart::where('user_id', 1)->get();
        $cartItems = Cart::with('product')->where('user_id', 1)->get();

        // dd($cartItems);
        return view('cart.cart', compact('cartItems')); // Assurez-vous de remplacer 'cart.show' par le nom réel de votre vue.
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
            'quantite' => 'required|integer',
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



}
