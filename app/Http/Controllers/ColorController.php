<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        return view('admin.pages.color.index');
    }
}
