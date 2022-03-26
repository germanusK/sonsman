<?php

namespace App\Http\Controllers;

use App\HttpService\HttpServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VisitBooker extends Controller
{

    private HttpServiceProvider $httpService;

    function __construct(HttpServiceProvider $httpService)
    {
        $this->httpService = $httpService;
    }
    //
    function index(Request $request){
        $data = $this->httpService->getById($request->id);
        return view('book-visit', [$data]);
    }

    
    function submit(Request $request){
        $validator = Validator::make($request->all(), []);
        if ($validator->fails()) {
            # code...
            return redirect('/bookVisit/'.$request->id)->withErrors($validator->errors());
        }
        // post schedule
    }
}
