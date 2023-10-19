<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File; 
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
          //  'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Check if the event already exists
        $event = Event::where('name', $request->input('name'))->first();
        if ($event) {
            return redirect()->back()->with('error', 'Event already exists.');
        }
    
  
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $ext;
        
                if ($file->move('uploads/event/', $fileName)) {
                    $validatedData['image'] = $fileName;
                } else {
                    // Handle file moving error
                    return redirect()->back()->with('error', 'Failed to move the uploaded file.');
                }
            } else {
                // Handle invalid file error
                return redirect()->back()->with('error', 'Invalid file format.');
            }
        }
        
              // Create a new event using the validated data
              $event = Event::create($validatedData);
              $event->category()->associate($request->input('category_id'));
    
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
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'owner' => 'required|string|max:255',
            'category_id' => 'exists:categories,id', // Validate that the category exists
        ]);
    
        $event = Event::find($id);
    
        // Handle image update
   
        if ($request->hasFile('image')) {
            $path = 'uploads/event/' . $event->image;
            if (File::exists($path)) {
                File::delete($path);
            }
    
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
    
            $file->move('uploads/event/', $fileName);
    
            $validatedData['image'] = $fileName; 
        }
    
        // Update the event's data using the validated data
        $event->update($validatedData);
    
        // Handle category update (if needed)
        if ($request->has('category_id')) {
            $category = Category::find($request->input('category_id'));
    
            // Set the category for the event
            $event->category()->associate($category);
            $event->save();
        }
    
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