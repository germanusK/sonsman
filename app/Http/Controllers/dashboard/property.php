<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\HttpService\HttpServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class property extends Controller
{

    private $propertyList;

    function __construct(HttpServiceProvider $http)
    {
        $this->propertyList = $http->getProperty()->collect()->keyBy('id');
    }
    
    public function index()
    {
        # code...
        return view('dashboard.property.index', ['data'=>$this->propertyList]);
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
        ]);
        if (!$valid->fails()) {
            # code...
            if($this->httpService->postProperty($request->all())->successful()){
                #perform formal operation

            }
            else{
                $this->httpService->postProperty($request->all())->onError(function($error){
                    // alert for operation error/failure
                    return $error;
                });
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
        return view('dashboard.property.edit', ['data'=>$this->propertyList->get($id)]);
    }

    public function update($id, Request $request)
    {
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
            $this->httpService->updateProperty($id, $request->all());
        }
        # redirect back on response

    }

    public function preview($id)
    {
        # code...
        // fetch item data
        return view('dashboard.property.preview', ['data'=>$this->propertyList->get($id)]);
    }

    public function delete($id)
    {
        # code...
        return Redirect::back();
    }
}
