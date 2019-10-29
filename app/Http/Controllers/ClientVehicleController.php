<?php

namespace App\Http\Controllers;
use App\Client_vehicle;

use Illuminate\Http\Request;

class ClientVehicleController extends Controller
{
    //
    public function index(Request $request){

        if(!empty($request['client_id'])){
            $res = Client_vehicle::find($request['client_id']);
        }else{
            $res = Client_vehicle::all();
        }
        // return response(array('data'=>$res,'mesg'=>'OK'),200)->header('Content-Type','Application/Json');
        return response(json_encode(['data'=>$res,'success'=>'yes']))->header('Content-Type','Application/Json');

    }
}
