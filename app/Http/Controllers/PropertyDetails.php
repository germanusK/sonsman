<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyDetails extends Controller
{
    //
    function index(Request $request){
        return view('property-details');
    }
}
