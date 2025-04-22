<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebsiteContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebsiteContentController extends Controller
{
    // fecth all
    public function index()
    {
        $sliders = WebsiteContent::where('type','slider')->get();
        return view('backend.website.websiteContent', compact('sliders'));
    }

    // store
    public function SliderStore(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'slider-' . time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('sliders', $imageName, 'public');
        }
    
        // Store in database
        WebsiteContent::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'file' => $imagePath,
            'type' => 'slider',
            'status' => 1,
        ]);
    
        return redirect()->route('admin.website.content')->with('success', 'Slider added successfully!');
        
    }
    
    //slider edit
    public function SliderEdit($id)
    {
        $slider = WebsiteContent::findOrFail($id);
        return view('backend.website.sliderEdit', compact('slider'));
    }

    //slider update
    public function SliderUpdate(Request $request, $id)
    {
        $slider = WebsiteContent::findOrFail($id);
    
        // Validate input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'nullable|in:0,1',
        ]);
    
        // Image update logic
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($slider->file && Storage::disk('public')->exists($slider->file)) {
                Storage::disk('public')->delete($slider->file);
            }
    
            // Store new image
            $image = $request->file('image');
            $imageName = 'slider-' . time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('sliders', $imageName, 'public');
    
            $slider->file = $imagePath;
        }
    
        // Update other fields
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->status = $request->input('status');
        $slider->save();
    
        return redirect()->route('admin.website.content')->with('success', 'Slider updated successfully!');
    }

    //slider destroy
    public function SliderDestroy($id)
    {
        $content = WebsiteContent::findOrFail($id);

        // Delete image from storage if exists
        if ($content->file && Storage::disk('public')->exists($content->file)) {
            Storage::disk('public')->delete($content->file);
        }

        // Delete the record
        $content->delete();

        return redirect()->route('admin.website.content')->with('success', 'Content deleted successfully.');
    }
}