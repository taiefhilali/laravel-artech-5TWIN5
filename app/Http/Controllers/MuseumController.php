<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Museum;
use App\Models\MuseumCategory;

class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $museums = Museum::join('museum_categories', 'museums.category_id', '=', 'museum_categories.id')
        ->select('museums.*', 'museum_categories.name as category_name')
        ->get();
        //$museums = Museum::all();
        return view ('museums.index')->with('museums', $museums);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = MuseumCategory::all();
        return view('museums.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'category_id' => 'required',
            'zip_code' => 'required',
            'phone_number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $imagePath = $request->file('image')->store('museum_images', 'public');

        $museum = new Museum;
        $museum->name = $request->input('name');
        $museum->description = $request->input('description');
        $museum->phone_number = $request->input('phone_number');
        $museum->founding_date = $request->input('founding_date');
        $museum->address = $request->input('address');
        $museum->zip_code = $request->input('zip_code');
        $museum->website = $request->input('website');
        $museum->email = $request->input('email');
        $museum->category_id = $request->input('category_id');
        $museum->zip_code = $request->input('zip_code');
        $museum->image = $imagePath;
        $museum->save();

        // $input = $request->all();
        //Museum::create($museum);
        return redirect('museum')->with('flash_message', 'Museum added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $museum  = Museum::join('museum_categories', 'museums.category_id', '=', 'museum_categories.id')
        ->where('museums.id', $id)
        ->select('museums.*', 'museum_categories.name as category_name')
        ->first();
        //$museum = Museum::find($id);
        return view('museums.show')->with('museum', $museum);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $museum = Museum::find($id);
        return view('museums.edit')->with('museum', $museum);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $museum = Museum::find($id);
        $input = $request->all();
        $museum->update($input);
        return redirect('museum')->with('flash_message', 'Museum updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Museum::destroy($id);
        return redirect('museum')->with('flash_message', 'Museum deleted!');
    }
}
