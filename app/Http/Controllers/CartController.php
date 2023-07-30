<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        return view('home.cart');
       }
    public function checkout(){
        return view('home.checkout');
       }
}
