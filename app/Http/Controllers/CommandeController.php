<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Cart;



class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes = Commande::all();
        return view('commande.indexB', compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('commande.createB');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validation des données
         $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'region' => 'required|string', // Validation de la région
            'quantite_produits' => 'required|integer', // Validation de la quantité de produits
        ]);

        // Enregistrement de la commande
        $commande = Commande::create($validatedData);

         // Traitement de l'image
         if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = $imagePath->getClientOriginalName();
            $commande->image = $imagePath;
            $imagePath->storeAs('images', $imageName);

            $commande->save();
        }

        return redirect()->route('commande.indexB')->with('success', 'Commande créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commande = Commande::findOrFail($id);
        return view('commandes.show', compact('commande'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $commande = Commande::findOrFail($id);
        return view('commande.edit', compact('commande'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validation des données
         $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'region' => 'required|string', // Validation de la région
            'quantite_produits' => 'required|integer', // Validation de la quantité de produits
        ]);

        // Mise à jour de la commande
        $commande = Commande::findOrFail($id);
        $commande->update($validatedData);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = $imagePath->getClientOriginalName();
            $commande->image = $imageName;  // Enregistrez le nom du fichier dans la base de données
            $imagePath->storeAs('images', $imageName);
            $commande->save();
        }

        return redirect()->route('commande.indexB')->with('success', 'Commande mise à jour avec succès.');
    }

    public function createOrderFromCart()
{
    $cartItems = Cart::where('user_id', auth()->id())->get();

    if ($cartItems->isEmpty()) {
        return redirect()->back()->with('error', 'Empty Cart!');
    }

    $order = new Commande;
    $order->user_id = auth()->id();
    $order->status = 'pending'; // or any default status you'd like
    $order->total_price = $cartItems->sum(function($item) {
        return $item->product->price * $item->quantity;
    });
    $order->save();

    // Link cart items to the order
    foreach ($cartItems as $item) {
        $item->order_id = $order->id;
        $item->save();
    }

    return redirect()->route('commande.indexB', $order->id)->with('success', 'Commande créée avec succès!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commande = Commande::findOrFail($id);
        $commande->delete();

        return redirect()->route('commande.indexB')->with('success', 'Commande supprimée avec succès.');
    }

   

}
