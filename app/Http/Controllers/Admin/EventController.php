<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\crR;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::paginate(10);
        return view('admin.event.all-event', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $requestData = $request->except('file'); // Exclude 'file' from the request data
        $image = $request->file('file');

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('events'), $imageName);
            $requestData['image'] = $imageName;
        }

        Event::create($requestData);

        return redirect("event")->with("success", "Successfully created");
    }


    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $event = Event::find($event)?->first();
        return view('admin.event.event-edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $requestData = $request->except('file'); // Exclude 'file' from the request data
    $image = $request->file('file');

    if ($image) {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('events'), $imageName);
        $requestData['image'] = $imageName;
    }

    $event = Event::findOrFail($id); // Find the event by its ID, not the requestData

    $event->update($requestData); // Update the event with the modified data

    // Redirect to the index page or show page
    return redirect("event")->with("success", "Successfully updated");
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return response()->json(['message' => 'Event deleted successfully']);
    }
    
}
