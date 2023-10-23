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
        $comments = $feedback->comments; 
    
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
    
        $feedback = Feedback::findOrFail($feedbackId);
    
        $comment = new Comment([
            'descriptionComment' => $validatedData['descriptionComment'],
            'dateComment' => now(),
        ]);
    
        $feedback->comments()->save($comment);
    
        $productId = $feedback->product->id;
    
        return redirect()->route('product.product', ['id' => $productId])->with('success', 'Comment created successfully.');
    }
    
    public function show($feedbackId)
    {
        // Retrieve the feedback and associated comments
        $feedback = Feedback::findOrFail($feedbackId);
        $comments = Comment::where('feedback_id', $feedbackId)->get();
    
        // Pass the retrieved instances to the view for rendering
        return view('product.product', compact('feedback', 'comments'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
  

    /**
     * Update the specified resource in storage.
     */
   
public function update(Request $request, $feedbackId, $commentId)
{
    $comment = Comment::findOrFail($commentId);
    $request->validate([
        'descriptionComment' => 'required|max:255',
    ]);
    
    // Check if the comment belongs to the specified feedback
    if ($comment->feedback_id != $feedbackId) {
        abort(404);
    }

    $comment->update([
        'descriptionComment' => $request->input('descriptionComment'),
        // Add other fields as needed
    ]);
    $comment->save();

    if ($request->ajax()) {
        return response()->json([
            'comment' => $comment,
        ]);
    }

    $productId = $comment->feedback->product->id;

    return redirect()->route('product.product', ['id' => $productId])->with('success', 'Comment updated successfully.');
}

        
      

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($feedbackId, $commentId)
    {
        $comment = Comment::findOrFail($commentId);
    
        if ($comment->feedback_id != $feedbackId) {
            abort(404); 
        }
    
        $productId = $comment->feedback->product->id;
    
        $comment->delete();
    
        return redirect()->route('product.product', ['id' => $productId])->with('success', 'Comment deleted successfully.');
    }
}    
