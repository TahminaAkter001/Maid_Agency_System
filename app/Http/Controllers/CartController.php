<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function cart()
    {
        return view('home.cart');
    }

    public function checkout()
    {
        return view('home.checkout');
    }
}
