<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;
// use App\Http\Requests\StoreClientPost;
use Illuminate\Http\Response;
use Symfony\Component\VarDumper\Caster\RedisCaster;

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

    public function client_add(Request $request){

        // $str = 'saya suka dia';
        // $arr = explode(' ',$str);
        return view('templates.clients_add');
    }

    public function client_upload(Request $request){

        $request->validate([
            'client_email'=>'required|unique:clients|max:255',
        ],[
            'client_email.required'=>'Email required!',
            'client_email.unique'=>'Email already existed in our system!',
        ]);

        $imagefolder = public_path('images');
        $imageName = time().'.'.$request->user_avatar->getClientOriginalExtension();
        $imagepath = $imagefolder.'/'.$imageName;
        $request->user_avatar->move($imagefolder, $imageName);
        
        //new client instance
        $client = new Client;
        
        $client->client_name = $request->client_name;
        $client->client_hp = $request->client_phone_no;
        $client->client_email = $request->client_email;
        $client->country_code = $request->client_country;
        $client->client_image = $imagepath;
        $client->save();

        // echo json_encode(['data'=>$data,'image_url'=>$imageName]);
        // return back()->withInput()->withErrors(['client_email.required','Name is required & Unique!']);
        return back()->with('success', 'Client created successfully.');
    }
}

