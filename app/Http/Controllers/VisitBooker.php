<?php

namespace App\Http\Controllers;

use App\HttpService\HttpServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class VisitBooker extends Controller
{


    //
    function index(Request $request){
        $data = $this->httpService->getById($request->id)->collect();
        return view('book-visit', ['data'=>$data]);
    }

    
    function submit(Request $request){
        
        
        $validator = Validator::make($request->all(), []);
        if ($validator->fails()) {
            # code...
            return redirect()->withErrors($validator->errors());
        }
        // post schedule
        $this->httpService->postSchedule($request->all());
        
    }
}
