<?php

namespace App\Http\Controllers;
use App\Http\Requests\FeedbackRequest ;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

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
        public function store(Request $request, $productId, FeedbackRequest $feedbackRequest)
        {
            $product = Product::findOrFail($productId);
            $user = Auth::user();
            $userId = $user->id;        
            // Add the user ID to the feedback form data.
            // This will ensure that the user is associated with their feedback.
            $feedbackRequest->request->add(['user_id' => $userId]);
        
            $feedback = new Feedback([
               
                'description' => $request->input('description'),
                'ratings' => $request->input('ratings'),
                'date' => now(),
            ]);
            $feedback->user_id = $userId;

            $product->feedbacks()->save($feedback);
        
            if ($feedback) {
                return  redirect()->route('product.product', ['id' => $productId])
                    ->with('success', 'Feedback submitted successfully');
            } else {
                return back()->withInput()->withErrors($request->validated());
            }
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
     
        
        public function showStatistics(Request $request)
        {
            // Retrieve all feedbacks with their comments
            $feedbacks = Feedback::with('comments')->get();
    
            // Count the number of comments per feedback
            $commentsPerFeedback = $feedbacks->mapWithKeys(function ($feedback) {
                return [$feedback->id => $feedback->comments->count()];
            });
    
            return view('Feedback.statisticscomment', compact('commentsPerFeedback'));
        }

} 