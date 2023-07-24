<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentFormController extends Controller
{
    public function form(){
        return view('agent.agentform');
    }
}
