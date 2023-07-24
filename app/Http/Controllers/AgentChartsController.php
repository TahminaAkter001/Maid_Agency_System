<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentChartsController extends Controller
{
    public function chart(){
        return view('agent.charts');
    }
}
