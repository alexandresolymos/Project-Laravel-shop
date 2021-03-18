<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function contact(){
        return view('contact');
    }

    public function orders(){
        return view('orders');
    }







}
