<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('home.homepage');
            } elseif ($usertype == 'agent') {
                return view('agent.agenthome');
            }
        }

    }

    public function homepage()
    {
        return view('home.homepage');
    }
    public function about()
    {
        return view('home.about');
    }
}
