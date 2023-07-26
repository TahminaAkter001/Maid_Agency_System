<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddTool;

class AgentAddToolController extends Controller
{
    public function AgentAddTool(){
        return view('agent.addtool');
    }

    public function add_post(Request $request){
        $post = new AddTool;

        $post-> p_name = $request->p_name;
        $post-> p_price = $request->p_price;
        $post-> p_details = $request->p_details;
        $post-> p_quantity = $request->p_quantity;

        $image = $request->image;
        $imagename = time().' . '. $image->getClientOriginalExtension();
        $request->image->move('ProductImage', $imagename);
        $post-> image = $imagename;

        $post-> p_name = $request->p_name;


        $post-> save();
        return redirect()->back()->with('message','New Products Added Successfully!');


    }
}
