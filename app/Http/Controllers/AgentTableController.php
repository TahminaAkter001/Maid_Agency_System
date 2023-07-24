<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentTableController extends Controller
{
    public function tables(){
        return view('agent.tables');
    }
}
