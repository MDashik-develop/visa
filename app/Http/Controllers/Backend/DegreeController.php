<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    // fetch
    public function index()
    {
        $degrees = Degree::all();
        return view('backend.degree.index', compact('degrees'));
    }

    // create
    public function create()
    {
        return view('backend.degree.create');
    }

    // store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required',
        ]);

        $degree = Degree::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.degree.index')->with('success', 'Degree created successfully');
    }

    // edit
    public function edit($id)
    {
        $degree = Degree::find($id);
        return view('backend.degree.edit', compact('degree'));
    }

    // update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);

        $degree = Degree::find($id);
        $degree->update($request->all());
        return redirect()->route('admin.degree.index')->with('success', 'Degree updated successfully');
    }

    // delete
    public function destroy($id)
    {
        $degree = Degree::find($id);
        $degree->delete();
        return redirect()->route('admin.degree.index')->with('success', 'Degree deleted successfully');
    }
}