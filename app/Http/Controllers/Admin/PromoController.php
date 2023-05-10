<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Promo;

class PromoController extends Controller
{
    public function index()
    {
        return view('admin.pages.promo.index');
    }

    public function create()
    {
        return view('admin.pages.promo.create');
    }

    public function edit(Promo $promo)
    {
        return view('admin.pages.promo.edit' , ['promo' => $promo]);
    }
}
