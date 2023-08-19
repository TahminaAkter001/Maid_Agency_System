<?php

namespace App\Http\Controllers;

use App\Models\AddTool;

class ToolsController extends Controller
{
    public function tools()
    {
        $post = AddTool::all();

        return view('home.tools', compact('post'));
    }

    public function borrow($id){
        $post = AddTool::where('id', $id)->firstOrFail();
        return view('profile.borrow', compact('post'));
    }

    /*******admin */
    public function index(){

        $post = AddTool::all();
        return view('agent.borrow_req', compact('post'));
    }    


    public function approveRequest($id)
    {
        $request = AddTool::findOrFail($id);
        $request->delete();
        return back()->with('success', 'Request approved!');
        
    }

    public function rejectRequest($id)
    {
        $request = AddTool::findOrFail($id);
        $request->delete();
        return back()->withSuccess('success', 'Request rejected!');
    }






}
