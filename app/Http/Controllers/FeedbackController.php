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
        $comments = $feedback->comments; // Assuming you have a relationship between Feedback and Comment
    
        return view('product.product', ['comments' => $comments, 'feedback' => $feedback]);
    }
    
   
    
        public function create($productId)
        {
            $product = Product::findOrFail($productId);
            $feedbacks = $product->feedbacks; // Fetch feedbacks for the product
        
            return view('product.feedback.create', compact('product', 'feedbacks'));
        }
    
        public function store(Request $request, $productId)
        {
            // Validate the request as needed
    
            $product = Product::findOrFail($productId);
    
            $feedback = new Feedback([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'description' => $request->input('description'),
                'ratings' => $request->input('ratings'),
                'date' => now(), // Set the 'date' field directly
            ]);

            // Associate feedback with the product
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
        // public function update(Request $request, $productId, $feedbackId)
        // {
        //     $request->validate([
        //         'description' => 'required|string',
        //     ]);
        
        //     $feedback = Feedback::findOrFail($feedbackId);
        
        //     // Update only the description
        //     $feedback->description = $request->input('description');
        //     $feedback->save();
        
        //     return redirect()->route('product.product', ['id' => $productId])->with('success', 'Feedback updated successfully!');
        // }
        

        public function destroy($productId, $feedbackId)
        {

            
            Feedback::destroy($feedbackId);
        
            return redirect()->route('product.product', ['id' => $productId])->with('success', 'Feedback deleted successfully.');
        }
        

 

    
//     public function index()
//     {
//         $feedbacks = Feedback::all();
       
//         return view('product.product', compact('feedbacks'));
//     }
    

   
//     public function create()
//     {
//         return view('product.product');
//     }

//     public function store(Request $request)
//     {


//         $request->validate([
//             'name' => 'required|string',
//             'email' => 'required|email',
//             'description' => 'required|string',
//             'ratings' => 'required|integer',
//         ]);
//         $request->merge(['date' => Date::now()]);

//         Feedback::create($request->all());

//         return redirect()->route('product.product')->with('success', 'Feedback submitted successfully!');
//     }

    
 
//     public function edit($id)
//     {
//         $feedback = Feedback::find($id);
//         return view('product.products', compact('feedback'));
//     }

   
//     public function update(Request $request, $id)
// {
//     $request->validate([
//         'description' => 'required|string',
//     ]);

//     $feedback = Feedback::find($id);

//     $feedback->description = $request->input('description');
//     $feedback->save();

//     return redirect()->route('product.product')->with('success', 'Feedback updated successfully!');
// }



//     public function destroy($id)
//     {
//         Feedback::destroy($id);
//         return redirect()->route('product.product')->with('success', 'Feedback deleted successfully.');
//     }
} 