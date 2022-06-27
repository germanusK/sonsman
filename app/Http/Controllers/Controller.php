<?php

namespace App\Http\Controllers;

use App\Services\AppService1;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Router;
use MainService as GlobalMainService;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $httpService, $router;
    function __construct(AppService1 $httpProvider, Router $router)
    {
        $this->httpService = $httpProvider;
        $this->router = $router;
    }

    function _index(){
        // get latest/trending items 
        return view('welcome');
    }
}
