<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   Public function index(){
    if(Auth::id()){
        $usertype=Auth()->user()->usertype;

        if($usertype=='user'){
            return view('home.homepage');
        }
        else if($usertype=='agent'){
            return view('agent.agenthome');
        }
    }
   
        
   
   }

   public function homepage(){
    return view('home.homepage');
   }
}
