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

        if($request->wantsJson()){
            if(!empty($request['services_id'])){
                $res = Service::find($request['services_id']);
            }else{
                $res = Service::all();
            }
            // return response(array('data'=>$res,'mesg'=>'OK'),200)->header('Content-Type','Application/Json');
            return response(json_encode(['data'=>$res,'success'=>'yes']))->header('Content-Type','Application/Json');

        }else{
            $data['service'] = Service::limit(100)->offset(0)->get();
            // return  (new Response($data))->header('Content-Type','Application/Json');
            return view('templates.services',$data);
        }

    }

    // get specific service by id
    
    public function show(Service $service){
        // return Service::find($id);
        return $service;
    }


    //add new service
    public function store(Request $request)
    {

        // $data_c = $request->getContent(); // if using Content-Type:Application/Json
        $data = $request->toArray();

        // $newproduct = Service::create($request->toArray());
        $data1 = new Service;

        $data1->services_name = $request['s_name'];
        $data1->services_code = $request['s_code'];
        $data1->services_active = $request['s_activ'];
        // return response()->json($data1->toArray());

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
    public function update(Request $request){

        $data = $request->toArray();


        if(!empty($request['service_id'])){
            $data1 = Service::find($request['service_id']);
            $data1->services_name = trim($request['new_service_name']);
            if($data1->save()){
                return response()->json(['data'=>$data,'status'=>200]);
            }

        }else{
            return response()->json(['message'=>'ERROR']);
        }
    }
    //comment
}

