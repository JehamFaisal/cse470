<?php

namespace App\Http\Controllers\Front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class thankyouController extends Controller
{
    public function index() {

        

        return view('frontend.thankyou');
    }
}