<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddTool;

class ToolsController extends Controller
{

    public function tools(){
        $post = AddTool::all();
        return view('home.tools', compact('post'));
    }
    
}
