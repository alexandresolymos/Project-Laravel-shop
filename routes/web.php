<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

//Main
Route::get('/', [ProductController::class, 'random'])->name('home');

// Shop
Route::get('/shop', [ProductController::class, 'indextwo'])->name('shop.index');
Route::get('/shop/{product:slug}', [ProductController::class, 'show'])->name('shop.show');
Route::get('/cart/reset', [CartController::class, 'reset'])->name('cart.reset');


//cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');


//checkout
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/success-checkout', [HomeController::class, 'success'])->name('success.checkout');

//Orders
Route::get('/orders', 'HomeController@orders')->name('orders');

Auth::routes();

Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('admin.index');
    Route::get('/product', [ProductController::class, 'product'])->name('admin.product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::delete('/product/{product}/delete', [ProductController::class, 'delete'])->name('admin.product.delete');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('admin.product.update');

});




Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
