<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;
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

    public function indexUser(Request $request)
    {
        $productType = ProductType::all();
        
        $products = Product::when($request->categories, function ($query) use ($request) {
            return $query->where('product_type_id', $request->categories);
        })->get();
    
        return view('product.products', compact('productType', 'products'));
    }

    public function indexP($id)
    {
        $productTypes = ProductType::all();
        $product = Product::findOrFail($id);
        $productType = ProductType::findOrFail($product->product_type_id);
        return view('product.product', compact('productType', 'product','productTypes'));
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
        $category = ProductType::findOrFail($request->product_delete_id);
        
        if ($product) {
            $destination = 'uploads/product/'.$product->image_url;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $category->products()->delete();
            $product->delete();
            return redirect('admin/products')->with('message', 'Product Deleted Successfully');
        } else {
            return redirect('admin/products')->with('message', 'No product id found');
        }

    }
}
