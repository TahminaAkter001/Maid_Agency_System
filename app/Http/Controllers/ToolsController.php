<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function tool(){
        return view('agent.agenttool');
    }
}
