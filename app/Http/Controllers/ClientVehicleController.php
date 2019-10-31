<?php

namespace App\Http\Controllers;
use App\Client_vehicle;

use Illuminate\Http\Request;

class ClientVehicleController extends Controller
{
    //get vehicle client
    public function index(Request $request){

        if(!empty($request['client_id'])){
            $res = Client_vehicle::find($request['client_id']);
        }else{
            $res = Client_vehicle::all();
        }
        return response(json_encode(['data'=>$res,'success'=>'yes']))->header('Content-Type','Application/Json');

    }

    //add new vehicle
    public function store(Request $request){

        // $data_c = $request->getContent(); // if using Content-Type:Application/Json
        $data = $request->toArray();

        // return response($request->getContent());

        // $newproduct = Service::create($request->toArray());
        $data1 = new Client_vehicle;

        $data1->vehicle_brand = $request['v_brand'];
        $data1->vehicle_model = $request['v_model'];
        $data1->vehicle_battery_info = $request['v_battery_info'];
        $data1->vehicle_owner = $request['v_owner_id'];
        // return response()->json($data1->toArray());

        try{
            $data1->save();
            //if save
            return response(['data'=>$data1])->header('Content-Type','Application/Json');

        }catch(QueryException $ex){
            dd($ex->getMessage());
        }
    }

    //update a vehicle of client
    public function update(Request $request){

        if(!empty($request['id'])){
            $vehicle = Client_vehicle::find($request['id']);
            $vehicle->vehicle_brand = trim($request['vehicle_brand']);
            $vehicle->vehicle_model = trim($request['vehicle_model']);
            $vehicle->vehicle_cc = trim($request['vehicle_cc']);
            $vehicle->vehicle_battery_info = trim($request['vehicle_battery_info']);
            
            if($vehicle->save()){
                return response()->json(['data'=>$vehicle,'status'=>200]);
            }

        }else{
            return response()->json(['message'=>'ERROR']);
        }
    }
}
