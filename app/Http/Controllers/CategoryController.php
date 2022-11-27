<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreCategoryRequest;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(4);

        return view('admin.pages.category.index');
    }
}
