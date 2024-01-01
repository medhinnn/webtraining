<?php

use GuzzleHttp\Middleware;
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
Route::get('/', App\Http\Controllers\HomeController::class . '@index')->name('home.index');
Route::get('/about', App\Http\Controllers\HomeController::class . '@about')->name('home.about');
Route::get('/test', function () {
    return "you are here";
})->middleware(['hasrole:super']);
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/detail_lg', function () {
    return view('detail_lg');
});
//Route::get('/post/image','App\Http\Controllers\PostController@index');
// Route::get('/post {id}','App\Http\Controllers\PostController@index');
Route::get('/pages/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('/pages/employees', 'App\Http\Controllers\PagesController@employees');
Route::get('/employees-list', 'App\Http\Controllers\PagesController@employeesList');
Route::get('/pages/contact', 'App\Http\Controllers\PagesController@contact')->name('contact.index');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');



Route::get('/insert', 'App\Http\Controllers\ProductController@insert');
Route::get('/select', 'App\Http\Controllers\ProductController@select');
Route::get('/find/{id}', 'App\Http\Controllers\ProductController@find');
Route::get('/update', 'App\Http\Controllers\ProductController@update');
Route::get('/MassAssignmente', 'App\Http\Controllers\ProductController@MassAssignmente');
Route::get('/delete', 'App\Http\Controllers\ProductController@delete');
Route::get('/destroye/{id}', 'App\Http\Controllers\ProductController@destroye');
Route::get('/destroymultiple{ids}', 'App\Http\Controllers\ProductController@destroymultiple');
Route::get('/delete_query', 'App\Http\Controllers\ProductController@deletequery');
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name('cart.delete');
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');
// Route::get('/cart/{id}', 'App\Http\Controllers\CartController@show')->name('cart.show');

Route::middleware('admin')->prefix('/admin')->group(function () {

    Route::get('', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/products', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.product.index");
    Route::post('/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    Route::get('/products/create', 'App\Http\Controllers\Admin\AdminProductController@create')->name("admin.product.create");
    Route::delete('/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    Route::get('/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::get('/products/{id}/show', 'App\Http\Controllers\Admin\AdminProductController@show')->name("admin.product.show");
    Route::put('/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
    Route::get('/posts/insert_with_image', 'App\Http\Controllers\PostsController@insertPostWithPostImage');
    Route::get('/posts/{postId}/post_image', 'App\Http\Controllers\PostsController@getPostsImage');
    Route::get('/posts/post_image/{PostsImage}/post', 'App\Http\Controllers\PostsController@getPostsFromPostImage');
    Route::get('/posts/add_comments', 'App\Http\Controllers\PostsController@insertCommentsForPost');
    Route::get('/posts/posts_catagories', 'App\Http\Controllers\PostsController@posts_catagories');
    Route::get('/posts/{id}/with_catagories', 'App\Http\Controllers\PostsController@posts_catagories');
    Route::get('/catagories/{id}/with_posts', 'App\Http\Controllers\PostsController@posts_catagories');
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware('auth')->group(function () {
        Route::get('cart/purchase','App\Http\Controllers\CartController@purchase')->name("cart.purchase");
        Route::get('/my-account/orders','App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");
       
});
// Route::get('cart/purchase', 'App\Http\Controllers\CartController@show')->name('cart.purchase');


Auth::routes();