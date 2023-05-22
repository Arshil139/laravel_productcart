<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('listproduct');
});
 route::get('/addproduct', [App\Http\Controllers\ProductController::class, 'addproduct']);
 route::get('/listproduct', [App\Http\Controllers\ProductController::class, 'listproduct']);
 route::post('/create', [App\Http\Controllers\ProductController::class, 'store']);
 route::get('/cart', [App\Http\Controllers\ProductController::class, 'cart']);

Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');



?>



