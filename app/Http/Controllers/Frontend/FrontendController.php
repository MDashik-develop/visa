<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\Degree;
use App\Models\Message;
use App\Models\Subscribe;
use App\Models\University;
use App\Models\VisaType;
use App\Models\Website;
use App\Models\WebsiteContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    // Home page
    public function index()
    {
        $website = Website::first();
        $sliders = WebsiteContent::where('type','slider')->where('status', 1)->get();
        return view('frontend.home', compact('sliders', 'website'));
    }

    // Visa Assistance
    public function VisaAssistance(Request $request)
    {
        $countries = Countries::where('status', 1)->get();
        return view('frontend.visaAssistance', compact('countries'));
    }

    // Visa Assistance Get
    public function VisaAssistanceGet(Request $request)
    {
        $visa = VisaType::where('countries', $request->countries)->get();
        return response()->json($visa);
    }

    // Visa Assistance Result (fetch detailed visa info based on selected visa and country)
    public function VisaAssistanceResult(Request $request)
    {
        // Log the incoming request to check if data is being passed correctly
        // \Log::info('Visa Assistance Result Request:', $request->all());

        // Fetch the visa result using the provided visa and country
        $visaResult = VisaType::where('name', $request->visa)
                            ->where('countries', $request->countries)
                            ->first();

        // Check if the result exists
        if ($visaResult) {
            return response()->json($visaResult);  // Return the visa result as JSON
        } else {
            // If no result found, return an error message
            return response()->json(['error' => 'Visa result not found'], 404);
        }
    }


    // send massage applications
    public function message(Request $request)
    {
        // Validate the request data
        $request->validate([
            'user_id' => 'nullable|integer',
            'countrie' => 'required',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'nullable|string',
        ]);

        // Create a new application
        Message::create($request->all());

        // Redirect to the application index page with a success message
        return redirect()->route('home')->with('success', 'Message send successfully.');
    }

    // subscribe
    public function subscribe(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:subscribes,email',  // Ensure email is unique
        ]);

        // Create a new subscription
        Subscribe::create([
            'name' => Auth::user() ? Auth::user()->name : null,  // If name is null, use null
            'email' => $validated['email'],
        ]);

        return redirect()->route('home')->with('success', 'Subscription created successfully!');
    }

    // Study Abroad
    public function StudyAbroad()
    {
        $countries = Countries::where('status', 1)->get();
        return view('frontend.studyAbroad', compact('countries'));
    }

    // // Study Abroad Get
    public function StudyAbroadGet(Request $request)
    {
    //     $countires = University::where('countires', $request)->get();
    //     $countiresDegree = explode(',', $countires->degrees);
    //     $degree = Degree::where('name', $countiresDegree)->get();
    //     return response()->json($degree);
        $universities = University::where('countries', $request->countries)->get();

        // Initialize an array to hold the degrees
        $degreeIds = [];

        // Loop through universities to collect degree IDs
        foreach ($universities as $university) {
            $degreeIds = array_merge($degreeIds, explode(',', $university->degrees)); // Merge degrees from each university
        }

        // Retrieve the degrees based on the collected IDs
        $degrees = Degree::whereIn('id', $degreeIds)->get();

        // Return the degrees as a JSON response
        return response()->json($degrees);


    }

    // Study Abroad Result
    public function StudyAbroadResult(Request $request)
    {
        // Query for universities matching the selected country and degree
        $universities = University::where('countries', $request->countries)
                                    ->whereRaw("FIND_IN_SET(?, degrees)", [$request->degree])
                                    ->get();

        // Initialize an array to hold the degrees
        $degreeIds = [];
        foreach ($universities as $university) {
            $degreeIds = array_merge($degreeIds, explode(',', $university->degrees)); // Merge degrees from each university
        }

        // Retrieve the degree names based on the collected IDs
        $degrees = Degree::whereIn('id', $degreeIds)->get()->pluck('name', 'id'); // Pluck degree names indexed by ID

        // Add degree names to the universities' degree fields
        $universities->each(function ($university) use ($degrees) {
            $degreeIds = explode(',', $university->degrees);
            $university->degree_names = array_map(function ($id) use ($degrees) {
                return $degrees[$id] ?? 'Unknown Degree'; // Fetch degree name or fallback to 'Unknown Degree'
            }, $degreeIds);
        });

        // Check if universities are found
        if ($universities->isEmpty()) {
            return response()->json(['message' => 'No universities found for the selected country and degree.'], 404);
        }

        // Return the universities as a JSON response, with degree names included
        return response()->json($universities);
    }

}