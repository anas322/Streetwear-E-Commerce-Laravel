<?php

namespace App\Http\Controllers;

use App\Models\Category;

class MainController extends Controller
{
    public function index(){

        return view('pages.main',[
            'categories' => Category::all(),
        ]);
    }
}
