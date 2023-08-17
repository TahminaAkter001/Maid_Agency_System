<?php

namespace App\Http\Controllers;
use App\Models\Maid;
class CartController extends Controller
{
    public function checkout($id)
    {
        $post = Maid::where('id', $id)->firstOrFail();
        return view('home.checkout', compact('post'));
    }
    

}
