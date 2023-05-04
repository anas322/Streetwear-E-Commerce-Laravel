<?php

use App\Http\Livewire\Cart;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class,'index'])->name('home');


Route::controller(ProductController::class)->as('products.')->prefix('products')->group(function () {
    
    Route::get('/','index')->name('index');
    Route::get('/show', 'show')->name('show');

});

Route::view('/contact', 'pages.contact-us')->name('contact');


Route::middleware('auth')->group(function () {
    Route::get('/products/cart',Cart::class)->name('cart');
    
    Route::controller(OrderController::class)->prefix('orders')->as('orders.')->group(function () {
   
        Route::get('/orders', 'index')->name('index');
        Route::get('/single-order', 'show')->name('show');

    });
    
    Route::get('/address', [AddressController::class,'index'])->name('address.index');
    
});


// sign in as admin or user 
Route::get('redirects',function () {

    if(!auth()->user()->role_as == 1){
        return redirect()->route('home')->with('success','Logged In Successfully');
    }else {
        return redirect()->route('admin.dashboard')->with('success','Welcome to Dashboard');
    }

});

Route::fallback(function () {
    abort(404);
});
