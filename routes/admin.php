<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;






Route::middleware(['auth','isAdmin'])->prefix('admin')->as('admin.')->group(function () {
    
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    

    Route::get('categories',[CategoryController::class,'index'])->name('category.index');


    Route::get('products',[ProductController::class,'index'])->name('product.index');
    Route::get('products/create',[ProductController::class,'create'])->name('product.create');
    Route::get('products/{product:slug}/edit',[ProductController::class,'edit'])->name('product.edit');
});