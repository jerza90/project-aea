<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as product;

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
      $data['product'] = product::all();

      return view('profile.user_profile',$data);

    }
}
