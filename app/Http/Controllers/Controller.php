<?php

namespace App\Http\Controllers;

use App\HttpService\HttpServiceProvider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Router;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $httpService, $router;
    function __construct(HttpServiceProvider $httpProvider, Router $router)
    {
        $this->httpService = $httpProvider;
        $this->router = $router;
    }

    function _index(){
        // get latest/trending items 
        $latestTrending=$this->httpService->getLatestTrendingProperty()->collect();
        $property=$this->httpService->getProperty()->collect();
        $data = ['latestTrending'=>$latestTrending, 'property'=>$property];
        return view('welcome', ['data'=>$data]);
    }
}
