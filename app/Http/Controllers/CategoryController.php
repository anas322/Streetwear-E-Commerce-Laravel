<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreCategoryRequest;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view('admin.pages.category.index',['categories' => $categories]);
    }

    public function store(StoreCategoryRequest $request)
    {
        $validatedData = $request->validated();

        Category::create($validatedData);

        return redirect()->route('admin.category.index')->with('success','Category has been created');
    }
}
