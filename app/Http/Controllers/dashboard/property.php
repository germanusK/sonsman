<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\HttpService\HttpServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Validator;

class property extends Controller
{

    // private $propertyList, $httpService, $_router;

    // function __construct(HttpServiceProvider $http, Router $router)
    // {
    //     $this->propertyList = $http->getProperty()->collect()->keyBy('id');
    //     $this->httpService = $http;
    //     $this->_router = $router;
        
    // }
    
    public function index()
    {
        # code...
        return view('dashboard.property.index', ['data'=>$this->httpService->getProperty()->collect()]);
    }

    public function create()
    {
        # code...
        return view('dashboard.property.create');
    }

    public function store(Request $request)
    {
        # code...
        $valid = Validator::make($request->all(), [
            'name'=>'required',
            'group'=>'required|in:RE,GC,ARCH,CONS',
            'category'=>'required',
            'price'=>'required',
            'grade'=>'required|in:1,2,3,4',
            'images'=>'required',
            'images[*]'=>'mimes:jpg,png,jpeg,gif'
        ]);
       
        if (!$valid->fails()) {
            # code...
            $response = Redirect::to(Config::get('api_routes.api_properties'))->withHeaders(['Content-Type'=>'multipart/form-data', 'Accept'=>'*/*', 'Accept-Encoding'=>'gzip, deflate, br', 'Connection'=>'keep-alive']);
            // $response = $this->httpService->postProperty([
            //     'name'=>$request->name,
            //     'group'=>$request->group,
            //     'category'=>$request->category,
            //     'price'=>$request->price,
            //     'grade'=>$request->grade,
            //     'images'=>$request->images,
            //     'multipart'=>[
            //         'name'=>'images',
            //         'Content-type'=>'multipart/form-data'
            //     ]
            // ]);
            if($response->status()==200){
                #perform formal operation
                return Redirect::back()->with('success', 'Operation completed.');
            }
            else{
                return ('error occured: ');
                # code...
            }
        }
        else{
            // alert for validation errors
            return $valid->errors();
        }
        
    }

    public function edit($id)
    {
        # code...
        return view('dashboard.property.edit', ['data'=>$this->httpService->getById($id)->collect()]);
    }

    public function update($id, Request $request)
    {
        try {
            //code...
            # code to perform update...
            $valid = Validator::make($request->all(), [
                'name'=>'required',
                'group'=>'required|in:RE,GC,ARCH,CONS',
                'category'=>'required',
                'price'=>'required',
                'grade'=>'required|in:1,2,3,4',
            ]);
            if (!$valid->fails()) {
                # code...
                $responce = $this->httpService->updateProperty($id, $request->all());
            }
            # redirect back on response
        } catch (\Throwable $th) {
            //throw $th;
        }

    }

    public function preview($id)
    {
        # code...
        // fetch item data
        return view('dashboard.property.preview', ['data'=>$this->httpService->getById($id)->collect()]);
    }

    public function delete($id)
    {
        # code...
        $response = $this->httpService->deleteProperty($id);
        if ($response->successful()) {
            # code...
            return $response;
            return Redirect::to(url('/rest/property'))->with('success', 'Operation completed');
        }
        else {
            return "success";
            $response->body();
            return Redirect::back()->with('error', 'Operated failed. please try again later');
        }
    }
}
