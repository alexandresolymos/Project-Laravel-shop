<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function contact(){
        return view('contact');
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function success(){
        return view('success');
    }
    public function orders(){
        return view('orders');
    }







}
