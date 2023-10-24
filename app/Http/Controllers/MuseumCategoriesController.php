<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MuseumCategory;

class MuseumCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = MuseumCategory::all();
        return view ('museumCategories.index')->with('categories', $categories);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('museumCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        MuseumCategory::create($input);
        return redirect('category')->with('flash_message', 'Museum added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = MuseumCategory::find($id);
        return view('museumCategories.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = MuseumCategory::find($id);
        return view('museumCategories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = MuseumCategory::find($id);
        $input = $request->all();
        $category->update($input);
        return redirect('category')->with('flash_message', 'Category updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MuseumCategory::destroy($id);
        return redirect('category')->with('flash_message', 'category deleted!');
    }
}