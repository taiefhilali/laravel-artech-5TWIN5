<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Support\Facades\Date;


class FeedbackController extends Controller
{
    
    public function index($productId)
    {
        $product = Product::findOrFail($productId);

        $feedbacks = $product->feedbacks;

        return view('product.product', compact('feedbacks'));
    }

    public function show($feedbackId)
    {
        $feedback = Feedback::findOrFail($feedbackId);
        $comments = $feedback->comments; 
        return view('product.product', ['comments' => $comments, 'feedback' => $feedback]);
    }
    
   
    
        public function create($productId)
        {
            $product = Product::findOrFail($productId);
            $feedbacks = $product->feedbacks; 
        
            return view('product.feedback.create', compact('product', 'feedbacks'));
        }
    
        public function store(Request $request, $productId)
        {
    
            $product = Product::findOrFail($productId);
    
            $feedback = new Feedback([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'description' => $request->input('description'),
                'ratings' => $request->input('ratings'),
                'date' => now(), 
            ]);

            $product->feedbacks()->save($feedback);
    
            return redirect()->route('product.product', ['id' => $productId])
                ->with('success', 'Feedback submitted successfully');
        }
    


    
        // public function edit($productId, $feedbackId)
        // {
        //     $product = Product::findOrFail($productId);
        //     $feedback = Feedback::findOrFail($feedbackId);
        
        //     return view('product.product', compact('product', 'feedback'));
        // }
        
    
        /**
         * Update the specified resource in storage.
         */

         public function update(Request $request,$productId, $feedbackId)
{
            $feedback = Feedback::findOrFail($feedbackId);
            
            $request->validate([
                'description' => 'required|max:255',
            ]);
            
    
    if ($feedback->product_id != $productId) {
        abort(404);
    }

    $feedback->update([
        'description' => $request->input('description'),

    ]);
    $feedback->save();
    if ($request->ajax()) {
        return response()->json([
            'feedback' => $feedback,
        ]);
    }
    return redirect()->route('product.product', ['id' => $productId])->with('success', 'Feedback updated successfully!');
        
}


        public function destroy($productId, $feedbackId)
        {

            
            Feedback::destroy($feedbackId);
        
            return redirect()->route('product.product', ['id' => $productId])->with('success', 'Feedback deleted successfully.');
        }
        

} 