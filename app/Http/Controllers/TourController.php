<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller

{
    // Display a listing of the tours
    public function index(Request $request)
{
    // Get the search query from the request
    $search = $request->input('search');

    // Fetch tours with related destinations and users, applying search if provided
    $tours = Tour::with('destination', 'user')
        ->when($search, function ($query) use ($search) {
            return $query->where('name', 'like', '%' . $search . '%')
                         ->orWhere('description', 'like', '%' . $search . '%');
        })
        ->paginate(5); // You can adjust the number of items per page

    return view('tours.index', compact('tours'));
}


    // Show the form for creating a new tour
    public function create()
    {
        $destinations = Destination::all(); // Get all destinations
        return view('tours.create', compact('destinations'));
    }

    // Store a newly created tour in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'destination_id' => 'required|exists:destinations,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
        ]);

        $tour = new Tour($request->all());
        $tour->user_id = Auth::id(); // Set the user who created the tour
        if ($request->hasFile('image')) {
            $tour->image = $request->file('image')->store('tour_images', 'public'); // Store the image
        }
        $tour->save(); // Save the tour

        return redirect()->route('tours.index')->with('success', 'Tour created successfully.');
    }

    // Display the specified tour
    public function show(Tour $tour)
    {
        return view('tours.show', compact('tour'));
    }

    // Show the form for editing the specified tour
    public function edit(Tour $tour)
    {
        $destinations = Destination::all(); // Get all destinations
        return view('tours.edit', compact('tour', 'destinations'));
    }

    // Update the specified tour in storage
    public function update(Request $request, Tour $tour)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'destination_id' => 'required|exists:destinations,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $tour->fill($request->all());
        if ($request->hasFile('image')) {
            // Delete the old image if necessary
            if ($tour->image) {
                \Storage::disk('public')->delete($tour->image);
            }
            $tour->image = $request->file('image')->store('tour_images', 'public'); // Store new image
        }
        $tour->save(); // Save the updated tour

        return redirect()->route('tours.index')->with('success', 'Tour updated successfully.');
    }

    // Remove the specified tour from storage
    public function destroy(Tour $tour)
    {
        $tour->delete(); // Soft delete the tour
        return redirect()->route('tours.index')->with('success', 'Tour deleted successfully.');
    }



    public function showTour($id)
{
    $tour = Tour::findOrFail($id); // Fetch the tour by ID
    return view('tour', compact('tour')); // Pass the tour data to the view
}

}
