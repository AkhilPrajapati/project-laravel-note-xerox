<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class MyController extends Controller
{



    public function home()
    {
        $product = Product::all();
        // $product2 = Product::all();
        $product2 = Product::where(['tag'=>'new' or '20%'])->get();
        // $product2 = Product::where(['tag'=>'new'])->where(['tag'=>'10%'])->get();
        // $product2 = Product::where(['tag'=>'new'] and ['tag'=>'new'])->get();
        return view('frontend.home', compact('product', 'product2'));
    }
    public function product()
    {
        $product = Product::all();
        return view('frontend.product', compact('product'));
    }

    public function service()
    {
        return view('frontend.service');
    }
    public function about()
    {
        return view('frontend.about');
    }
}
