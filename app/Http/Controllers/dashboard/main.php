<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class main extends Controller
{
    //
    function index(Request $request){
          return view('dashboard.home');
    }
}
