<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\Visa;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    // fetch all users 
    public function index(){
        
        $visas = Visa::all();
        
        return view('backend.visa.index', compact('visas'));
    }

    // create visa
    public function create(){
        
        $countries = Countries::where('status', 1);
        
        return view('backend.visa.create', compact('countries'));
    }

    // store visa
    public function store(Request $request){

        // $request->validate([
    }
            
    
}