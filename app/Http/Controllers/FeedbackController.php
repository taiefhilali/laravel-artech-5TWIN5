<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

use App\Models\Feedback;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::all();
       
        return view('product.product', compact('feedbacks'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.product');
    }

    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'description' => 'required|string',
            'ratings' => 'required|integer',
        ]);
        $request->merge(['date' => Date::now()]);

        Feedback::create($request->all());

        return redirect()->route('product.product')->with('success', 'Feedback submitted successfully!');
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $feedback = Feedback::find($id);
        return view('product.products', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'description' => 'required|string',
    ]);

    $feedback = Feedback::find($id);

    // Update only the description
    $feedback->description = $request->input('description');
    $feedback->save();

    return redirect()->route('product.product')->with('success', 'Feedback updated successfully!');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Feedback::destroy($id);
        return redirect()->route('product.product')->with('success', 'Feedback deleted successfully.');
    }
}
