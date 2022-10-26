<?php

use Illuminate\Support\Facades\Route;
//use App\Http\PostController;
use App\Http\Controller\AddProductController;
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
    return view('dashboard');
});
Route::get('/product', function () {
    return view('add_product');
});
// Route::get('/product', [AddProductController::class, 'index']);
// Route::post('add', [AddProductController::class, 'add']);
Route::get('/customer', function () {
    return view('add_customer');
});
// Route::get('/free_issue', [\App\Http\Controllers\PostController::class, 'getAllProduct']) -> name('product.getAllProduct');
Route::get('/free_issue', function () {
    return view('free_issue');
});

Route::get('/order', function () {
    return view('order');
});
Route::get('/view_order', function () {
    return view('view_order');
});