<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{

    /**
     * Log user actions.
     *
     * @param string $action
     * @param array $details
     */
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

    // Display all testimonials
    public function index()
    {
        $testimonials = Testimonial::paginate(7); // Adjust the number as needed

        // Log action: View all testimonials
        $this->logAction('viewed all testimonials');

        return view('testimonials.index', compact('testimonials'));
    }

    // Show the form for creating a new testimonial
    public function create()
    {
        // Log action: Open create testimonial form
        $this->logAction('opened create testimonial form');

        return view('testimonials.create');
    }

    // Store a newly created testimonial in storage
    public function store(Request $request)
    {
        $userId = auth()->id(); // Get the authenticated user's ID

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'message' => 'required|string',
        ]);

        // Add authenticated user_id to the request
        $testimonialData = $request->all();
        $testimonialData['user_id'] = $userId;

        Testimonial::create($testimonialData);

        // Log action: Create testimonial
        $this->logAction('created testimonial', ['user_id' => $userId, 'message' => $request->message]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    // Display the specified testimonial
    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Log action: View testimonial
        $this->logAction('viewed testimonial', ['testimonial_id' => $id]);

        return view('testimonials.show', compact('testimonial'));
    }

    // Show the form for editing the specified testimonial
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Log action: Open edit testimonial form
        $this->logAction('opened edit testimonial form', ['testimonial_id' => $id]);

        return view('testimonials.edit', compact('testimonial'));
    }

    // Update the specified testimonial in storage
    public function update(Request $request, Testimonial $testimonial)
    {
        $userId = auth()->id(); // Get the authenticated user's ID

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|nullable|email',
            'message' => 'sometimes|required|string',
            'is_approved' => 'sometimes|required|boolean',
        ]);

        if ($request->has('name')) {
            $testimonial->name = $request->input('name');
        }
        if ($request->has('email')) {
            $testimonial->email = $request->input('email');
        }
        if ($request->has('message')) {
            $testimonial->message = $request->input('message');
        }
        if ($request->has('is_approved')) {
            $testimonial->is_approved = $request->input('is_approved');
        }

        $testimonial->user_id = $userId;
        $testimonial->save();

        // Log action: Update testimonial
        $this->logAction('updated testimonial', ['testimonial_id' => $testimonial->id, 'user_id' => $userId, 'updated_fields' => $request->all()]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    // Remove the specified testimonial from storage
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        // Log action: Delete testimonial
        $this->logAction('deleted testimonial', ['testimonial_id' => $id]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
