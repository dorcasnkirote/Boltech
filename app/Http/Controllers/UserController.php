<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport; // Create this export class for Excel
use Barryvdh\DomPDF\Facade as PDF; // Import the PDF facade
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $users = $search ? User::where('name', 'LIKE', '%' . $search . '%')
                         ->orWhere('email', 'LIKE', '%' . $search . '%')
                         ->paginate(5)
                         : User::paginate(5);

        $this->logAction('Viewed user list', ['search' => $search]);

        return view('users.index', compact('users', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->logAction('Viewed create user form');

        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        try {
            User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
                'added_by' => auth()->user()->name,
            ]);

            $this->logAction('Created user', ['email' => $validatedData['email']]);

            return redirect()->route('users.index')->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            \Log::error('User Creation Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to add user: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $this->logAction('Viewed user details', ['user_id' => $user->id, 'email' => $user->email]);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $this->logAction('Viewed edit user form', ['user_id' => $user->id, 'email' => $user->email]);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $user = User::findOrFail($id);
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id,
                'password' => 'nullable|string|min:8',
            ]);

            $updateData = [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
            ];

            if (!empty($validatedData['password'])) {
                $updateData['password'] = bcrypt($validatedData['password']);
            }

            $user->update($updateData);

            $this->logAction('Updated user', ['user_id' => $id, 'email' => $validatedData['email']]);

            return redirect()->route('users.index')->with('success', 'User Updated successfully!');
        } catch (\Exception $e) {
            \Log::error('User Update Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update user: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        $this->logAction('Deleted user', ['user_id' => $user->id, 'email' => $user->email]);

        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }

    /**
     * Export users to an Excel file.
     */
    public function exportExcel()
    {
        $this->logAction('Exported users to Excel');

        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
     * Generate a PDF of the users.
     */
    public function printPdf()
    {
        $users = User::all();

        if ($users->isEmpty()) {
            $this->logAction('Failed to generate PDF', ['error' => 'No users to export']);
            return redirect()->back()->with('error', 'No users to export.');
        }

        $pdf = PDF::loadView('users.pdf', compact('users'));
        $this->logAction('Generated users PDF');

        return $pdf->download('users.pdf');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            $this->logAction('Failed password update', ['error' => 'Incorrect current password']);
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $user->update(['password' => Hash::make($request->new_password)]);
        $this->logAction('Updated password', ['email' => $user->email]);

        return back()->with('status', 'Password updated successfully!');
    }
}
