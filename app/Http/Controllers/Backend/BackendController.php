<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    // fetch all users
    public function index()
    {
        // Fetch all users from the database
        $users = User::latest()->take(5)->get();

        // Return the view with the users data
        return view('backend.dashboard', compact('users'));
    }

    // fetch all users
    public function user()
    {
        // Fetch all users from the database
        $users = User::all();

        // Return the view with the users data
        return view('backend.user.index', compact('users'));
    }
    
    // create user  
    public function create()
    {
        // Return the view to create a new user
        return view('backend.user.create');
    }
    // store user
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'nullable|string|in:admin,applicant', // Optional role, default is 'user'
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role ?? 'applicant', // Default role is 'applicant'
        ]);

        // Redirect to the user index page with a success message
        return redirect()->route('admin.user.index')->with('success', 'User created successfully.');
    }

    // edit user
    public function edit($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Return the view to edit the user
        return view('backend.user.edit', compact('user'));
    }

    // update user
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'nullable|string|in:admin,applicant', // Optional role
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the user data
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->role = $request->role ?? 'applicant'; // Default role is 'applicant'
        $user->save();

        // Redirect to the user index page with a success message
        return redirect()->route('admin.user.index')->with('success', 'User updated successfully.');
    }

    // delete user
    public function destroy($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect to the user index page with a success message
        return redirect()->route('admin.user.index')->with('success', 'User deleted successfully.');
    }
}