<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexPageController;
use App\Http\Controllers\PotolokController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
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

Route::match(['get', 'post'],'/recall', [IndexPageController::class, 'recall']);

Route::get('/products', [ProductController::class, 'getAll']);

Route::get('/potolki/{id}', [PotolokController::class, 'potolki']);

Route::get('/shtori/{id}', [ProductController::class, 'shtori']);

Route::get('/condizionery/{id}', [ProductController::class, 'condizionery']);

Route::get('/svetilniki/{id}', [ProductController::class, 'svetilniki']);

Route::get('/subcategory/{id}', [SubcategoryController::class, 'getSubProds']);

Route::get('/subcategory/{id}/{type}', [SubcategoryController::class, 'getSubProdByType']);

Route::get('/about', function () {
    return view('pages.about');
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


