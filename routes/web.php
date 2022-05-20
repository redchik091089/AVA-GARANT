<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexPageController;
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


Route::get('/', [IndexPageController::class, 'get']);

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/products', function () {
    return view('pages.products');
});
Route::get('/product', function () {
    return view('pages.single_product');
});
Route::get('/prices', function () {
    return view('pages.prices');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/contact', function () {
    return view('pages.contact');
});


