<?php

namespace App\Http\Controllers;
use App\Service;
use \Illuminate\Database\QueryException;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //all
    public function index(Request $request){
        // return Service::all();
        // return response()->json(['data'=>$request->getContent()]);
        

        // $data = $request->getContent();
        // return response(json_decode($data,true));die();

        if(!empty($request['services_id'])){
            $res = Service::find($request['services_id']);
        }else{
            $res = Service::all();
        }
        // return response(array('data'=>$res,'mesg'=>'OK'),200)->header('Content-Type','Application/Json');
        return response(json_encode(['data'=>$res,'success'=>'yes']))->header('Content-Type','Application/Json');

    }

    // get specific service by id
    
    public function show(Service $service){
        // return Service::find($id);
        return $service;
    }


    //add new service
    public function store(Request $request)
    {
        // $newproduct = Service::create($request->toArray());
        // return response()->json($request->toArray(), 201);
        $data1 = new Service;

        $data1->services_name = $request['s_name'];
        $data1->services_code = $request['s_code'];
        $data1->services_active = $request['s_active'];

        try{
            $data1->save();
            //if save
            return response(['data'=>$data1])->header('Content-Type','Application/Json');

        }catch(QueryException $ex){
            dd($ex->getMessage());
        }
    }

    //update services
    // *I had to use post requests instead of put/patch, breaking the REST best practices :c
    public function update(Request $request,Service $service){
        
        $service->update($request->toArray());
        return response()->json(['data'=>$request->all(),'status'=>200]);
    }
    //comment
}

