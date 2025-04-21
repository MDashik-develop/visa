<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // ferch index page
    public function index()
    {
        $website = Website::first(); // not all()

        return view('backend.website.index', compact('website'));
    }

    // store
    public function store(){
        
    }
}