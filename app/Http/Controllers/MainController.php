<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class MainController extends Controller
{
    public function index(){

        return view('pages.main',[
            'latestArrivals' => Product::latest()->take(5)->get(),
        ]);
    }
}
