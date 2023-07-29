<?php

namespace App\Http\Controllers;
use App\Models\Maid;
use App\Models\Services;
use Illuminate\Http\Request;

class MaidController extends Controller
{
    public function show_maid(){
        $post = Maid::all();
        return view('agent.maids', compact('post'));
    }
    public function add_maid(){
        $service = Services::all();
        return view('agent.add_maid', compact('service'));
    }


    

    public function add_mpost(Request $request){
        $post = new Maid;

        $post-> serv_id = $request->serv_id;
        $post-> name = $request->name;
        $post-> slug = $request->slug;
        //image
        $image = $request->image;
        $imagename = time().' . '. $image->getClientOriginalExtension();
        $request->image->move('Maid', $imagename);
        $post-> image = $imagename;

        $post-> details = $request->details;
        $post-> salary = $request->salary;
        $post-> nid = $request->nid;
        $post-> address = $request->address;


        $post-> save();
        return redirect()->back();


    
}
}
