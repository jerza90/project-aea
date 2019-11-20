<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function index(Request $request){

        if($request->wantsJson()){

            if(!empty($request['client_id'])){
                $data['client'] = Client::find($request['client_id']);
            }else{
                $data['client'] = Client::all()->limit(100)->offset(0)->get();
            }
            return  (new Response($data))->header('Content-Type','Application/Json');
        
        }else{
            $data['client'] =  Client::limit(100)->offset(0)->get();
            return view('templates.clients',$data);
        }
    }
}

