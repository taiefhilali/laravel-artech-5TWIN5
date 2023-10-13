<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('Event.index', ['events' => $events]);
    }
    public function indexb()
    {
        $events = Event::all();

        return view('Event.indexb', ['events' => $events]);
    }

    public function create()
    {
        $categories = Category::all();


        return view('Event.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'owner' => 'required|string|max:255',
        ]);

        // Create a new event using the validated data
        $event = Event::create($validatedData);
        $event->category()->associate($request->input('category_id'));
        $event->save();

        // Redirect to a success page or route
        return redirect()->route('Event.index')->with('success', 'Event created successfully.');
    }

    public function show($id)
    {
        $event = Event::find($id);

        if ($event) {
            $categories = Category::all();
            return view('Event.show', compact('event', 'categories'));
        } else {
            return redirect()->route('Event.index')->with('error', 'Event not found.');
        }
    }


    public function edit($id)
    {
        $event = Event::find($id);
        $categories = Category::all();

        return view('Event.edit', compact('event', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'owner' => 'required|string|max:255',
        ]);

        // Update the event using the validated data
        $event->update($validatedData);

        // Get the category object
// Get the category object
        $category = Category::find($request->input('category_id'));

        // Set the category for the event
        $event->category()->associate($category);

        // Save the event
        $event->save();

        return redirect()->route('Event.index');
    }

    public function destroy($id)
    {
        Event::destroy($id);
        return redirect()->route('Event.index');
    }

    public function destroyb($id)
    {       
        Event::destroy($id);
        return redirect()->route('Event.indexb');
    }


}