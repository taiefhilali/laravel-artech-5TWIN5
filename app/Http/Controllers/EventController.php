<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
{
    $events = Event::all();
    return view('Event.index', ['events' => $events]);
}

public function create()
{
    return view('Event.create');
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
    Event::create($validatedData);

    // Redirect to a success page or route
    return redirect()->route('Event.index')->with('success', 'Event created successfully.');
}
public function show($id)
{
    $event = Event::find($id);
    return view('Event.show', compact('event'));
}

public function edit($id)
{
    $event = Event::find($id);
    return view('Event.edit', compact('event'));
}

public function update(Request $request, $id)
{
    $event = Event::find($id);
    $event->update($request->all());
    return redirect()->route('Event.index');
}

public function destroy($id)
{
    Event::destroy($id);
    return redirect()->route('Event.index');
}

}
