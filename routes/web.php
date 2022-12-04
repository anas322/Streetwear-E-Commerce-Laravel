<?php

use App\Models\Product;


use App\Http\Livewire\Cart;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('pages.main');
})->name('home');

Route::get('/products', function () {
    $products = Product::all();
    return view('pages.products.index',['products' => $products]);
})->name('products.index');

Route::get('/products/show', function () {
    return view('pages.products.show');
});

Route::get('/contact', function () {
    return view('pages.contact-us');
})->name('contact');

Route::get('/products/cart',Cart::class)->name('cart');

Route::middleware('auth')->group(function () {

    Route::get('/orders', function () {
        return view('pages.customer.orders');
    })->name('orders');
    
    Route::get('/single-order', function () {
        return view('pages.customer.single-order');
    })->name('single-order');
    
    Route::get('/address', function () {
        return view('pages.customer.adress');
    })->name('address');
    
});


// sign in as admin or user 
Route::get('redirects',function () {

    if(!auth()->user()->role_as == 1){
        return redirect()->route('home')->with('success','Logged In Successfully');
    }else {
        return redirect()->route('admin.dashboard')->with('success','Welcome to Dashboard');
    }

});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
