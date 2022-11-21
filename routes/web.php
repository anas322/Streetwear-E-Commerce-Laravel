<?php

use Illuminate\Support\Facades\Route;

use App\Http\livewire\ProductQuickView;

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
});

Route::get('/products', function () {
    return view('pages.products.index');
})->name('products.index');

Route::get('/products/show', function () {
    return view('pages.products.show');
});

Route::get('/orders', function () {
    return view('pages.customer.orders');
})->name('orders');

Route::get('/single-order', function () {
    return view('pages.customer.single-order');
})->name('single-order');

Route::get('/address', function () {
    return view('pages.customer.adress');
})->name('address');

Route::get('/contact', function () {
    return view('pages.contact-us');
})->name('contact');

Route::get('/products/cart',App\Http\Livewire\Cart::class )->name('cart');

Route::get('/test',ProductQuickView::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
