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
});

Route::get('/products/show', function () {
    return view('pages.products.show');
});

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
