<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DestinationController extends Controller
{
    protected function logAction($action, $details = [])
    {
        DB::table('logs')->insert([
            'user_id' => auth()->id(),
            'action' => $action,
            'details' => json_encode(array_merge([
                'email' => auth()->user()->email,
                'ip' => request()->ip(),
                'timestamp' => now(),
            ], $details)),
        ]);
    }

    /**
     * Display a listing of destinations.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $destinations = Destination::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', '%' . $search . '%')
                         ->orWhere('description', 'like', '%' . $search . '%');
        })->paginate(5);

        // Log the action
        $this->logAction('viewed destinations', $search ? ['search_query' => $search] : []);

        return view('destinations.index', compact('destinations', 'search'));
    }

    /**
     * Show the form for creating a new destination.
     */
    public function create()
    {
        // Log the action
        $this->logAction('viewed create destination form');

        return view('destinations.create');
    }

    /**
     * Store a newly created destination in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $originalFilename = $request->file('image')->getClientOriginalName();
            $filename = time() . '_' . $originalFilename;
            $imagePath = $request->file('image')->storeAs('destinations', $filename, 'public');

            Destination::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $imagePath,
                'user_id' => auth()->id(),
            ]);
        }

        // Log the action
        $this->logAction('created destination', ['destination_name' => $request->name]);

        return redirect()->route('destinations.index')->with('success', 'Destination created successfully.');
    }

    /**
     * Display the specified destination and its tours.
     */
    public function show(Destination $destination)
    {
        $tours = $destination->tours;

        // Log the action
        $this->logAction('viewed destination', ['destination_id' => $destination->id]);

        return view('destinations.show', compact('destination', 'tours'));
    }

    /**
     * Show the form for editing the specified destination.
     */
    public function edit(Destination $destination)
    {
        // Log the action
        $this->logAction('viewed edit destination form', ['destination_id' => $destination->id]);

        return view('destinations.edit', compact('destination'));
    }

    /**
     * Update the specified destination in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $destination->fill($validated);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('destinations', 'public');
            $destination->image = $path;
        }

        $destination->save();

        // Log the action
        $this->logAction('updated destination', ['destination_name' => $destination->name, 'destination_id' => $destination->id]);

        return redirect()->route('destinations.index')->with('success', 'Destination updated successfully.');
    }

    /**
     * Remove the specified destination from storage.
     */
    public function destroy(Destination $destination)
    {
        // Get the destination name
        $destinationName = $destination->name;

        // Perform the deletion
        $destination->delete();

        // Log the action with destination name
        $this->logAction('deleted destination', [
            'destination_id' => $destination->id,
            'destination_name' => $destinationName,
        ]);

        return redirect()->route('destinations.index')->with('success', 'Destination deleted successfully.');
    }

}
