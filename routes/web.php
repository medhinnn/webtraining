<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/employee-list', function () {
    return view('employee-list');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/', App\Http\Controllers\HomeController::class.'@index');
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/detail_lg', function () {
    return view('detail_lg');
});
 
//Route::get('/post/image','App\Http\Controllers\PostController@index');
// Route::get('/post {id}','App\Http\Controllers\PostController@index');
Route::get('/pages/contact','App\Http\Controllers\PagesController@contact');
Route::get('/pages/employees','App\Http\Controllers\PagesController@employees');
Route::get('/employees-list','App\Http\Controllers\PagesController@employeesList');
Route::get('/pages/contact','App\Http\Controllers\PagesController@contact')->name('home.index');

Route::get('/products','App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/{id}','App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/cart','App\Http\Controllers\CartController@index')->name('cart.index');
Route::get('/cart/{id}','App\Http\Controllers\CartController@show')->name('cart.show');