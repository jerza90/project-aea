<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(Request $request){
        if($request->wantsJson()){

            if(!empty($request['order_id'])){
                $data['orders'] = Order::find($request['order_id']);
            }else{
                $data['orders'] = Service::all()->limit(100)->offset(0)->get();
            }
            return (new response($data))->header('Content-Type','Application/Json');
    
        }else{
            $data['orders'] = Order::limit(100)->offset(0)->get();
            // return  (new Response($data))->header('Content-Type','Application/Json');
            return view('templates.orders',$data);
        }
    }
}
