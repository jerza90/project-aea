<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    //
    public function index(Request $request){

        $data['client'] = Client::limit(100)->offset(0)->get();

        if($request->wantsJson()){
            return  (new Response($data))->header('Content-Type','Application/Json');
        }else{
            return view('templates.clients',$data);
        }
    }
}
