<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexPageController;
use App\Http\Controllers\PotolokController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ContactController;
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

Route::post('/send', [ContactController::class, 'sendToUs']);

Route::get('/products', [ProductController::class, 'getAll']);

Route::get('/potolki/{id}', [PotolokController::class, 'potolki']);

Route::get('/shtori/{id}', [ProductController::class, 'shtori']);

Route::get('/condizionery/{id}', [ProductController::class, 'condizionery']);

Route::get('/svetilniki/{id}', [ProductController::class, 'svetilniki']);

Route::get('/uslugi/{id}', [ProductController::class, 'uslugi']);

Route::get('/subcategory/{id}', [SubcategoryController::class, 'getSubProds']);

Route::get('/subcategory/{id}/{type}', [SubcategoryController::class, 'getSubProdByType']);

Route::get('/contact', [ContactController::class, 'get']);

Route::get('/product/{id}',  [ProductController::class, 'getOne']);

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/prices', function () {
    return view('pages.prices');
});
Route::get('/calculator', function () {
    return view('pages.calculator');
});
Route::get('/types', function () {
    return view('pages.types_shtori');
});


