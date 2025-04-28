<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\Degree;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UniversityController extends Controller
{
    // fetch all universities
    public function index()
    {
        $universities = University::all();
        return view('backend.university.index', compact('universities'));
    }

    // create new university
    public function create()
    {
        $degrees = Degree::where('status', 1)->get();
        $countries = Countries::where('status', 1)->get();
        return view('backend.university.create', compact('degrees', 'countries'));
    }

    // store new university
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_intro' => 'required|string|max:255',
            'session_intake' => 'required|string|max:255',
            'eligibility' => 'required|string|max:255',
            'application_deadline' => 'required|string|max:255',
            'documents_required' => 'required|string|max:255',
            'cost' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'degrees' => 'required',
            'countries' => 'required',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'university-' . time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('universities', $imageName, 'public');
        }

        $university = University::create([
            'name' => $request->name,
            'short_intro' => $request->short_intro,
            'session_intake' => $request->session_intake,
            'eligibility' => $request->eligibility,
            'application_deadline' => $request->application_deadline,
            'documents_required' => $request->documents_required,
            'cost' => $request->cost,
            'image' => $imagePath,
            'description' => $request->description,
            'status' => $request->status,
            'degrees' => implode(',', $request->degrees),
            'countries' => $request->countries,
        ]);

        return redirect()->route('admin.university.index')->with('success', 'University created successfully');
    }

    // edit university
    public function edit($id)
    {
        $university = University::find($id);
        $degrees = Degree::where('status', 1)->get();
        $countries = Countries::where('status', 1)->get();
        $selectedDegrees = explode(',', $university->degrees);
        return view('backend.university.edit', compact('university', 'degrees', 'selectedDegrees', 'countries'));
    }

    // update university
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_intro' => 'required|string|max:255',
            'session_intake' => 'required|string|max:255',
            'eligibility' => 'required|string|max:255',
            'application_deadline' => 'required|string|max:255',
            'documents_required' => 'required|string|max:255',
            'cost' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'degrees' => 'required',
            'countries' => 'required',
        ]);

        $university = University::find($id);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($university->image) {
                Storage::disk('public')->delete($university->image);
            }

            $image = $request->file('image');
            $imageName = 'university-' . time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('universities', $imageName, 'public');

            $university->image = $imagePath;
        }

        $university->update([
            'name' => $request->name,
            'short_intro' => $request->short_intro,
            'session_intake' => $request->session_intake,
            'eligibility' => $request->eligibility,
            'application_deadline' => $request->application_deadline,
            'documents_required' => $request->documents_required,
            'cost' => $request->cost,
            'description' => $request->description,
            'status' => $request->status,
            'degrees' => implode(',', $request->degrees),
            'countries' => $request->countries,
        ]);

        return redirect()->route('admin.university.index')->with('success', 'University updated successfully');
    }

    // delete university
    public function destroy($id)
    {
        $university = University::find($id);
        $university->delete();
        return redirect()->route('admin.university.index')->with('success', 'University deleted successfully');
    }
}