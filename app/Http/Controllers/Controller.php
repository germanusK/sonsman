<?php

namespace App\Http\Controllers;

use App\HttpService\HttpServiceProvider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $httpService;
    function __construct(HttpServiceProvider $httpProvider)
    {
        $this->httpService = $httpProvider;
    }

    function index(Request $request){
        // get latest/trending items 
        $latestTrending=$this->httpService->getLatestTrendingProperty();
        $others=$this->httpService->getProperty()->collect();

        return view('welcome', ['others'=>$others[0]['images'][0]]);
    }
}
