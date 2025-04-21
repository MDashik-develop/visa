<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Home page
    public function index()
    {
        return view('frontend.home');
    }
    
    // Visa Assistance
    public function VisaAssistance(Request $request)
    {
        return view('frontend.visaAssistance');
    }

    // send massage applications
    public function massage(Request $request)
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
        // Validate the request data
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        // Create a new application
        Subscribe::create($request->all());

        // Redirect to the application index page with a success message
        return redirect()->route('home')->with('success', 'Subscribe successfully.');
    }
    
        
}