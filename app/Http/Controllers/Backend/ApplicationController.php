<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //    // fetch all applications
    public function index()
    {
        // Fetch all applications from the database
        $applications = Application::all();

        // Return the view with the applications data
        return view('backend.application.index', compact('applications'));
    }

    // create application
    public function create()
    {
        // Return the view to create a new application
        return view('backend.application.create');
    }

    // store application
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'user_id' => 'required|integer',
            'visa_type_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'mail' => 'required|string|email|max:255',
            'message' => 'nullable|string',
            // 'status' => 'nullable|string|in:pending,approved,rejected',
            'submitted_at' => 'nullable|date',
            'approved_at' => 'nullable|date',
            'rejected_reason' => 'nullable|string',
        ]);

        // Create a new application
        Application::create($request->all());

        // Redirect to the application index page with a success message
        return redirect()->route('admin.applications.index')->with('success', 'Application created successfully.');
    }

    // edit application
    public function edit($id)
    {
        // Find the application by ID
        $application = Application::findOrFail($id);

        // Return the view to edit the application
        return view('backend.application.edit', compact('application'));
    }

    // update application

}