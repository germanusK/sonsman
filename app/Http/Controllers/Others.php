<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Others extends Controller
{
    //

    function about(){
        return view('about');
    }

    // subscription validator/handler
    function subscribe(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required|email'
        ]);
        if ($validator->fails()) {
            # code...
            return redirect()->with($validator->errors());
        }
        // post subscription request
    }
}
