<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WebsiteController extends Controller
{
    // ferch index page
    public function index()
    {
        $website = Website::first(); // not all()

        return view('backend.website.index', compact('website'));
    }

    // store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
    
        $website = Website::first();
        $data = $request->only(['name', 'title', 'description', 'address', 'email', 'phone']);
    
        if ($request->hasFile('logo')) {
            // Get extension
            $extension = $request->file('logo')->getClientOriginalExtension();
    
            // Generate custom filename like logo-1714003212.jpg
            $fileName = 'logo-' . time() . '.' . $extension;
    
            // Store in storage/app/public/logos
            $logoPath = $request->file('logo')->storeAs('logos', $fileName, 'public');
    
            // Delete old logo if exists
            if ($website && $website->logo) {
                Storage::disk('public')->delete($website->logo);
            }
    
            $data['logo'] = $logoPath;
        }
    
        if ($website) {
            $website->update($data);
        } else {
            Website::create($data);
        }
    
        return redirect()->back()->with('success', 'Website settings saved successfully.');
    }
}