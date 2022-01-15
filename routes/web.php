<?php

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



Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])
    ->name('/index');

Route::get('/product', [\App\Http\Controllers\ProductController::class, 'product'])
    ->name('/product');

Route::get('/products', [\App\Http\Controllers\CategoryController::class, 'products'])
    ->name('/products');

Route::get('/products/{products}', [\App\Http\Controllers\CategoryController::class, 'products'])
    ->name('/productsByCategory');


Route::get('/cart', [\App\Http\Controllers\ProductController::class, 'cart'])
    ->name('/cart');

Route::get('/checkout', [\App\Http\Controllers\ProductController::class, 'checkout'])
    ->name('/checkout')->middleware('auth');

Route::post('/cart/check', [\App\Http\Controllers\ProductController::class, 'cart_check'])
    ->name('/cart/check');

Route::get('/add-cart', [\App\Http\Controllers\ProductController::class, 'addCart'])
    ->name('/add-cart');

Route::post('/make-order', [\App\Http\Controllers\ProductController::class, 'makeOrder'])
    ->name('/make-order');

Route::get('/remove-itemcart/{id}', [\App\Http\Controllers\ProductController::class, 'removeItemCart'])
    ->name('/remove-itemcart');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



require __DIR__.'/auth.php';
