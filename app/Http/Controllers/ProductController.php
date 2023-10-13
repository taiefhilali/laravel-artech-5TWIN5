<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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

    public function indexUser()
    {
        $productType = ProductType::all();
        $products = Product::all();

        return view('product.products', compact('productType', 'products'));
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
