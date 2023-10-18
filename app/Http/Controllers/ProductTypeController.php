<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Models\ProductType;
use App\Http\Requests\StoreProductTypeRequest;
use App\Http\Requests\UpdateProductTypeRequest;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogs = ProductType::all();
        return view('catalog.indexProductType', compact('catalogs'));   
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catalog.createProductType');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductTypeRequest $request)
    {
        $validatedData=$request->validated();

        $category = new ProductType;
        $category->name = $validatedData['name'];
        $category->description = $validatedData['description'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;

            $file->move('uploads/catalog/',$fileName);
            $category->image = $fileName;

        }

        $category->save();

        return redirect('admin/catalogs')->with('message','Catalog Added Successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductType $ProductType)
    {
        return  view('catalog.editProductType',compact('ProductType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductTypeRequest $request, $ProductType)
    {

        $category=ProductType::findOrFail($ProductType);
        $validatedData=$request->validated();

        $category->name = $validatedData['name'];
        $category->description = $validatedData['description'];


    
        if($request->hasFile('image')){

            $path = 'uploads/catalog/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;

            $file->move('uploads/catalog/',$fileName);
            $category->image = $fileName;

        }

        $category->update();

        return redirect('admin/catalogs')->with('message','Catalog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $productType = ProductType::find($request->catalog_delete_id);
    
        if ($productType) {
            $destination = 'uploads/catalog/'.$productType->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $productType->products()->delete();
            $productType->delete();
            return redirect('admin/catalogs')->with('message', 'Catalog Deleted Successfully');
        } else {
            return redirect('admin/catalogs')->with('message', 'No catalog id found');
        }
    }
    
    
}