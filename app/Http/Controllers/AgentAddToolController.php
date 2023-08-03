<?php

namespace App\Http\Controllers;

use App\Models\AddTool;
use Illuminate\Http\Request;

class AgentAddToolController extends Controller
{
    public function show_post()
    {
        $post = AddTool::all();

        return view('agent.agenttool', compact('post'));
    }

    public function addtools()
    {
        return view('agent.addtool');
    }

    public function add_post(Request $request)
    {
        $post = new AddTool;

        $post->p_name = $request->p_name;
        $post->p_price = $request->p_price;
        $post->p_details = $request->p_details;
        $post->p_quantity = $request->p_quantity;

        $image = $request->image;
        $imagename = time().' . '.$image->getClientOriginalExtension();
        $request->image->move('ProductImage', $imagename);
        $post->image = $imagename;

        $post->save();

        return redirect()->back();

    }
}
