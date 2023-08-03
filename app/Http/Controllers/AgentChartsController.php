<?php

namespace App\Http\Controllers;

class AgentChartsController extends Controller
{
    public function chart()
    {
        return view('agent.charts');
    }
}
