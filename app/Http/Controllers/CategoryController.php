<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller

{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|min:4',
            'description' => 'required|string|min:10',
        ]);
    
        $category = Category::create($request->all());
    
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255|min:4',
            'description' => 'required|string|min:10',
        ]);
    
        $category->update($request->all());
    
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index');
    }
    

    public function search(Request $request)
    {
        $query = $request->input('query');

        try {
            $categories = Category::where('name', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%')
                ->get();

            return view('categories.search_results', compact('categories'));
        } catch (ModelNotFoundException $e) {
            // No results found, so return an empty result or a message.
            return view('categories.search_results', compact('categories'))->with('message', 'No categories found.');
        }
    }

}
