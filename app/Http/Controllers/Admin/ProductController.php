<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.pages.product.index');
    }

    public function create()
    {
        return view('admin.pages.product.create');
    }
    public function edit(Product $product)
    {
        return view('admin.pages.product.edit',['product' => $product]);
    }
}
