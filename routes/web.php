<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Product_detailsController;
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
    return view('pages/Homepage');
});
Route::get('/about', function () {
    return view('pages/About');
});

Route::get('/blog', [BlogController ::class,'index']);
Route::get('/products', [ProductsController ::class,'index']);


Route::get('/blog/article/{articleId}',[BlogController ::class,'show'])->name('article.show') ;

Route::get('/products/{productId}',[ProductsController ::class,'show'])->name('products.show') ;

Route::match(['get'], '/contacts', [ContactUSController::class, 'contacts'])->name('contactUs.show') ;
Route::post('/store-contact-info', [ContactUSController::class, 'storeContactInfo']);

/*
Route::get('/manufacturer', [ManufacturerController::class, 'create'])->name('contactUs.store');
//About products
Route::get('/products/create', [\App\Http\Controllers\ProductsController::class, 'create']);
Route::get('/products/{id}/view', [\App\Http\Controllers\ProductsController::class, 'view']);
Route::get('/products/{id}/delete', [\App\Http\Controllers\ProductsController::class, 'delete']);
//Route::get('/products', [\App\Http\Controllers\ProductsController::class, 'all']);
//About Product_details

Route::get('/details/create', [\App\Http\Controllers\Product_detailsController::class, 'create']);
Route::get('/details/{id}/view', [\App\Http\Controllers\Product_detailsController::class, 'view']);
Route::get('/details/{id}/delete', [\App\Http\Controllers\Product_detailsController::class, 'delete']);
Route::get('/details', [\App\Http\Controllers\Product_detailsController::class, 'all']);
*/