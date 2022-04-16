<?php

namespace App\Http\Controllers\Front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class shopController extends Controller
{
    public function index() {

        $products = Product::inRandomOrder()->take(4)->get();

        return view('frontend.shop', compact('products'));
    }
}