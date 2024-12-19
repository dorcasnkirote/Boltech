<?php
namespace App\Http\Controllers;

use App\Models\InformationCategory;
use Illuminate\Http\Request;

class InformationCategoryController extends Controller
{
    // Display all information categories
    public function index()
    {
        $categories = InformationCategory::paginate(10);
        return view('information_categories.index', compact('categories'));
    }

    // Show form to create a new information category
    public function create()
    {
        return view('information_categories.create');
    }

    // Store a new information category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Automatically set the user_id to the ID of the currently logged-in user
        $category = InformationCategory::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => auth()->id(), // Authenticated user ID
        ]);

        return redirect()->route('information_categories.index')->with('success', 'Information category created successfully.');
    }


    // Show a specific information category
    public function show($id)
    {
        $category = InformationCategory::findOrFail($id);
        return view('information_categories.show', compact('category'));
    }

    // Show form to edit an information category
    public function edit($id)
    {
        $category = InformationCategory::findOrFail($id);
        return view('information_categories.edit', compact('category'));
    }

    // Update an information category
    public function update(Request $request, $id)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        try {
            // Find the category by ID
            $category = InformationCategory::findOrFail($id);

            // Update the category's attributes
            $category->name = $validatedData['name'];
            $category->description = $validatedData['description'];

            // Save the changes
            $category->save();

            // Redirect back with success message
            return redirect()->route('information_categories.index')
                ->with('success', 'Category updated successfully.');
        } catch (\Exception $e) {
            // Handle errors and redirect back with error message
            return redirect()->route('categories.edit', $id)
                ->with('error', 'Failed to update the category. Please try again.');
        }
    }


    // Delete an information category
    public function destroy($id)
    {
        $category = InformationCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('information_categories.index')->with('success', 'Information category deleted successfully.');
    }
}
