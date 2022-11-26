<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;






Route::middleware(['auth','isAdmin'])->prefix('admin')->as('admin.')->group(function () {
    
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    

    Route::get('categories',[CategoryController::class,'index'])->name('category.index');
    Route::post('categories',[CategoryController::class,'store'])->name('category.store');
});