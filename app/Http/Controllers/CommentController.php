<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
class CommentController extends Controller
{

    public function index()
    {
        $comments = Comment::all();
        return view('Comment.index', ['comments' => $comments]);
    }

    
    public function create()
    {
        return view('Comment.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'owner' => 'required|string|max:255',
        ]);
    
        // Create a new event using the validated data
        Event::create($validatedData);
    
        // Redirect to a success page or route
        return redirect()->route('Event.index')->with('success', 'Event created successfully.');
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
    public function destroy(Comment $comment)
    {
        //
    }
}
