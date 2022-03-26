<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Property extends Controller
{
    //
    function index(Request $request){
        return view('property');
    }
}
