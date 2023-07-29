<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show_service(){
            $service = Services::all();
            return view('agent.services', compact('service'));
        }
        public function add_service(){
            return view('agent.add_service');
        }
    
    
        
    
        public function add_spost(Request $request){
            $service = new Services;
    
            $service-> name = $request->name;
            $service-> slug = $request->slug;
            $service-> description = $request->description;
    
    
            $service-> save();
            return redirect()->back();
    
    
        
    }
}