<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ColorController extends Controller
{
     public function index()
    {
        return view('admin.pages.color.index');
    }
}
