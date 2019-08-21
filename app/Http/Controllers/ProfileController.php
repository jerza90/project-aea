<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traveltime as travel;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

      $data['user'] = auth()->user();

      //timeline data
      $data['travels'] = travel::all();

      return view('profile.user_profile',$data);

    }
}
