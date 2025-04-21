<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\VisaType;
use Illuminate\Http\Request;

class VisaTypeController extends Controller
{
    // fetch all users 
    public function index(){
        
        $visaTypes = VisaType::all();
        
        return view('backend.visa.index', compact('visaTypes'));
    }

    // create visa
    public function create(){
        
        $countries = Countries::where('status', 1)->get();
        
        return view('backend.visa.create', compact('countries'));
    }

    // store visa
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'countries' => 'required|exists:countries,name',
            'description' => 'required|string',
            'eligibility' => 'required|string',
            'processing_time' => 'required|string|max:255',
        ]);

        VisaType::create([
            'name' => $request->input('name'),
            'countries' => $request->input('countries'), // $country->countries,
            'description' => $request->input('description'),
            'eligibility' => $request->input('eligibility'),
            'processing_time' => $request->input('processing_time'),
            // 'status' => 1, // Default status as active
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.visa.index')->with('success', 'Visa type created successfully.');
    }

    // Edit visa
    public function edit($id)
    {
        // Find the visa type by ID
        $visa = VisaType::findOrFail($id);

        // Fetch active countries
        $countries = Countries::where('status', 1)->get();

        // Return the edit view
        return view('backend.visa.edit', compact('visa', 'countries'));
    }

    // Update visa
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'countries' => 'required',
            'description' => 'required|string',
            'eligibility' => 'required|string',
            'processing_time' => 'required|string|max:255',
        ]);

        // Find the visa type by ID
        $visa = VisaType::findOrFail($id);

        // Update the VisaType record
        $visa->update([
            'name' => $request->input('name'),
            'countries' => $request->input('countries'),
            'description' => $request->input('description'),
            'eligibility' => $request->input('eligibility'),
            'processing_time' => $request->input('processing_time'),
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.visa.index')->with('success', 'Visa type updated successfully.');
    }

    // Destroy visa
    public function destroy($id)
    {
        
    }
}