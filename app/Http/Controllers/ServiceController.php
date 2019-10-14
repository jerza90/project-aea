<?php

namespace App\Http\Controllers;
use App\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //all
    public function index(Request $request){
        // return Service::all();
        // return response()->json(['data'=>$request->getContent()]);

        $data = $request->getContent();
        $dtax = json_decode($data,true);
        // echo $dtax['services_name'];
        print_r($data);
        
    }

    // get specific service by id
    
    public function show(Service $service){
        // return Service::find($id);
        return $service;
    }


    //add new service
    public function store(Request $request)
    {
        $newproduct = Service::create($request->toArray());
        return response()->json($request->toArray(), 201);
    }

    //update services
    // *I had to use post requests instead of put/patch, breaking the REST best practices :c
    public function update(Request $request,Service $service){
        
        $service->update($request->toArray());
        return response()->json(['data'=>$request->all(),'status'=>200]);
    }
    //comment
}

