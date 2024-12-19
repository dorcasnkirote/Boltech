<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
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

    public function index(Request $request)
    {
        $search = $request->input('search');
        $packages = Package::with(['tour', 'user'])
            ->when($search, function ($query) use ($search) {
                return $query->where('name', 'like', '%' . $search . '%')
                             ->orWhere('description', 'like', '%' . $search . '%');
            })
            ->paginate(10);

        return view('packages.index', compact('packages'));
    }

    public function create()
    {
        $tours = Tour::all();
        return view('packages.create', compact('tours'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'tour_id' => 'required|exists:tours,id',
            'duration' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $package = new Package($request->all());
        $package->user_id = Auth::id();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('packages', 'public');
            $package->image = $imagePath;
        }

        $package->save();

        // Log the creation of the package
        $this->logAction('created package', ['name' => $package->name]);

        return redirect()->route('packages.index')->with('success', 'Package created successfully!');
    }

    public function show(Package $package)
    {
        return view('packages.show', compact('package'));
    }

    public function edit(Package $package)
    {
        $tours = Tour::all();
        return view('packages.edit', compact('package', 'tours'));
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'tour_id' => 'required|exists:tours,id',
            'duration' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($package->image) {
                Storage::delete($package->image);
            }
            $path = $request->file('image')->store('packages', 'public');
            $package->image = $path;
        }

        $package->update($request->except('image'));

        // Log the update of the package
        $this->logAction('updated package', ['name' => $package->name]);

        return redirect()->route('packages.index')->with('success', 'Package updated successfully!');
    }

    public function destroy(Package $package)
    {
        Storage::delete($package->image);
        $package->delete();

        // Log the deletion of the package
        $this->logAction('deleted package', ['name' => $package->name]);

        return redirect()->route('packages.index')->with('success', 'Package deleted successfully!');
    }
}
