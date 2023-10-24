<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

use App\Models\ProductType;
use App\Http\Requests\UpdateProductTypeRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        
        return view('product.indexProduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productType = ProductType::all();
        return view('product.createProduct', compact('productType'));
    }

    public function indexUser(Request $request)
    {
        $productType = ProductType::all();
        
        
        $products = Product::when($request->categories, function ($query) use ($request) {
            return $query->where('product_type_id', $request->categories);
        })->paginate(3); // Add the paginate method here
    
    
        return view('product.products', compact('productType', 'products'));
    }

    public function indexP($id)
    {
        $productTypes = ProductType::all();
        $product = Product::findOrFail($id);
        $productType = ProductType::findOrFail($product->product_type_id);
        $feedbacks = $product->feedbacks; // Retrieve associated feedbacks

        return view('product.product', compact('productType', 'product','productTypes','feedbacks'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(UpdateProductTypeRequest $request)
    {
        $validatedData = $request->validated();
    
        $category = ProductType::findOrFail($validatedData['product_type_id']);
    
        $productData = [
            'product_type_id' => $validatedData['product_type_id'],
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'artist' => $validatedData['artist'],
            'dimensions' => $validatedData['dimensions'],
            'quantity' => $validatedData['quantity'],
            'price' => $validatedData['price'],
            'medium' => $validatedData['medium'], // Set the 'medium' attribute
            'creation_date' => $validatedData['creation_date'],
        ];
    
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
    
            $file->move('uploads/product/', $fileName);
    
            $productData['image_url'] = $fileName; // Set the 'image_url' attribute
        }
    
        $product = $category->products()->create($productData);
    
        return redirect('admin/products')->with('message', 'Product Added Successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $Product)
    {
        $productType = ProductType::all();
        return  view('product.editProduct',compact('Product','productType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductTypeRequest $request, $Product)
    {
        $validatedData = $request->validated(); 
    
        $product = Product::findOrFail($Product);
    
        if ($product->product_type_id !== $validatedData['product_type_id']) {
            $category = ProductType::findOrFail($validatedData['product_type_id']);
            $product->productType()->associate($category);
        }
    
        $productData = [
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'artist' => $validatedData['artist'],
            'dimensions' => $validatedData['dimensions'],
            'quantity' => $validatedData['quantity'],
            'price' => $validatedData['price'],
            'medium' => $validatedData['medium'],
            'creation_date' => $validatedData['creation_date'],
        ];
    
        if ($request->hasFile('image_url')) {
            $path = 'uploads/product/' . $product->image_url;
            if (File::exists($path)) {
                File::delete($path);
            }
    
            $file = $request->file('image_url');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
    
            $file->move('uploads/product/', $fileName);
    
            $productData['image_url'] = $fileName; 
        }
    
        $product->update($productData); 
    
        return redirect('admin/products')->with('message', 'Product Updated Successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $product = Product::find($request->product_delete_id);
        if ($product) {
            $destination = 'uploads/product/'.$product->image_url;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $product->delete();
            return redirect('admin/products')->with('message', 'Product Deleted Successfully');
        } else {
            return redirect('admin/products')->with('message', 'No product id found');
        }
    }


    public function addToCart(Request $request, $productId)
{
    $product = Product::find($productId);
    
    if (!$product) {
        return redirect()->back()->with('error', 'Produit introuvable!');
    }

    $cart = new Cart;
    $cart->product_id = $product->id;
    // $cart->user_id = auth()->id();
    $cart->user_id  = 1;
    $cart->quantity = $request->input('quantity', 1); // Default to 1 if not provided
    $cart->save();

    return redirect()->back()->with('success', 'Produit ajouté au panier!');
}

// public function addToCart(Request $request, $productId) {
//     // Trouver le produit par son ID
//     $product = Product::find($productId);

//     // Ajoutez le produit au panier
//     $cart = new Cart;
//     $cart->product_id = $product->id;
//     $cart->user_id = 3;
//     $cart->quantity = $request->input('quantity', 1); // Default à 1 si non

//     $cart->save();

//     // Vérifiez si une commande existe déjà pour cet utilisateur
//     $commande = Commande::where('user_id', 3)->where('status', 'pending')->first();

//     // Si aucune commande n'existe, créez-en une nouvelle
//     if(!$commande) {
//         $commande = new Commande;
//         $commande->user_id = 3;
//         // $commande->status = 'pending'; // Vous pouvez définir le statut par défaut comme 'pending'
       
//         $commande->save();
//     }

//     // Liez le produit à la commande
//     $commande->products()->attach($product->id); 

//     // Redirigez l'utilisateur avec un message de réussite
//     return redirect()->back()->with('success', 'Produit ajouté au panier et à la commande avec succès!');
// }


public function showCommandeWithProducts($id) {
    $commande = Commande::with('products')->find($id);  // Chargez la relation 'products' avec la commande
    return view('commande/showPC', ['commande' => $commande]);
}


}
