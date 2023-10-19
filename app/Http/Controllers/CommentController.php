<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Feedback;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('Comment.index', ['comments' => $comments]);
    }

    
   
    public function create($feedbackId)
    {
        $feedback = Feedback::findOrFail($feedbackId);
        $comments = $feedback->comments; // Fetch comments for the feedback
    
        return view('product.product', compact('comments', 'feedback'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $feedbackId)
    {
        $validatedData = $request->validate([
            'descriptionComment' => 'required|string',
        ]);
    
        // Assuming you have a relationship between Feedback and Comment
        $feedback = Feedback::findOrFail($feedbackId);
    
        $comment = new Comment([
            'descriptionComment' => $validatedData['descriptionComment'],
            'dateComment' => now(),
        ]);
    
        $feedback->comments()->save($comment);
    
        // Assuming there is a relationship between Feedback and Product
        $productId = $feedback->product->id;
    
        return redirect()->route('product.product', ['id' => $productId])->with('success', 'Comment created successfully.');
    }
    
    public function show(Comment $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($feedbackId, $commentId)
    {
        $comment = Comment::findOrFail($commentId);
    
        // Verify that the comment is associated with the specified feedback
        if ($comment->feedback_id != $feedbackId) {
            abort(404); // Or handle the error as needed
        }
    
        // Get the product id from the associated feedback
        $productId = $comment->feedback->product->id;
    
        $comment->delete();
    
        return redirect()->route('product.product', ['id' => $productId])->with('success', 'Comment deleted successfully.');
    }
}    
