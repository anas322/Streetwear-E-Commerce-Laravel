<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


// Route::get('/login',[LoginController::class,'index'])->name('login');
// Route::post('/login',[LoginController::class,'index'])->name('login');

Route::get('/admin/dashboard',[DashboardController::class,'index'])->middleware(['auth','isAdmin'])->name('admin.home');


// Route::middleware('auth:admin')->prefix('admin')->as('admin')->group(function () {

    
// });