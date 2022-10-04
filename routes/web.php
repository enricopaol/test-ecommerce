<?php

use App\Http\Controllers\HomeController;
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

Route::group([
    'namespace' => 'App\Http\Controllers'
], function() {

    // Home
    Route::get('/', 'HomeController@home')->name('home');

    // Category
    Route::get('/category/{category}', 'CategoriesController@show')->name('categories.show');

    // Products
    Route::get('/product/{product}', 'ProductsController@show')->name('products.show');
});
