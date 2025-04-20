<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    // fetch all Countires 
    public function index()
    {

        $countries = Countries::all();

        return view('backend.countries.index', compact('countries'));
    }

    // create visa
    public function create()
    {

        return view('backend.countries.create');
    }

    // store visa
    public function store(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'status' => 'required|in:0,1', // Ensure status is either 0 or 1
        ]);

        // Create a new country record
        Countries::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'status' => $data['status'],
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.countries.index')->with('success', 'Country created successfully.');
    }

    // edit visa
    public function edit($id)
    {
        // Find the country by ID
        $country = Countries::findOrFail($id);

        // Return the view to edit the country
        return view('backend.countries.edit', compact('country'));
    }

    // update visa
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:50',
            'status' => 'required|in:0,1', // Ensure status is either 0 or 1
        ]);
            
        // Find the country by ID
        $country = Countries::findOrFail($id);
        
        // Update the country data
        $country->name = $data['name'];
        $country->description = $data['description'];
        $country->status = $data['status'];
        $country->save(); 
        
        // Redirect back with a success message
        return redirect()->route('admin.countries.index')->with('success', 'Country update successfully.');
    }
    
    // destroy visa
    public function destroy($id)
    {
        // Find the country by ID
        $country = Countries::findOrFail($id);
        
        // Delete the country
        $country->delete();

        // Redirect back with a success message
        return redirect()->route('admin.countries.index')->with('success', 'Country created successfully.');
    }
}