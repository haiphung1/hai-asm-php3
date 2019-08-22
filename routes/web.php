<?php

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

use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'category', 
    'as'=>'category.',
    'middleware'=>['auth', 'user.active']
    ], function () {
    Route::get('list-cate', 'CategoryController@index')->name('list-cate');
    Route::get('cate-add', 'CategoryController@formAdd')->name('cate-add');
    Route::post('create-cate', 'CategoryController@createAdd')->name('create-cate');
    Route::get('{cate}/edit-cate', 'CategoryController@editCate')->name('edit-cate');
    Route::post('update-cate', 'CategoryController@updateCate')->name('update-cate');
    Route::get('{cate}/delete-cate', 'CategoryController@deleteCate')->name('delete-cate');
});
Route::group([
    'prefix' => 'product', 
    'as'=>'product.',
    'middleware'=>['auth', 'user.active']
    ], function () {
    Route::get('list-product', 'ProductController@index')->name('list-product');
    Route::get('add-product', 'ProductController@addProduct')->name('add-product');
    Route::post('create-product', 'ProductController@createProduct')->name('create-product');
    Route::get('{product}/delete-product', 'ProductController@deleteProduct')->name('delete-product');
    Route::get('{product}/edit-product', 'ProductController@editProduct')->name('edit-product');
    Route::post('update-product', 'ProductController@updateProduct')->name('update-product');
    Route::get('{product}/detail-product', 'ProductController@detailProduct')->name('detail-product');
});
Route::group(['prefix' => 'comment', 
            'as'=>'comment.',
            'middleware'=>['auth', 'user.active']
            ], function () {
    Route::get('list-comment', 'CommentController@index')->name('list-comment');
    Route::get('{product}/add-comment', 'CommentController@addComment')->name('add-comment');
    Route::post('create-comment', 'CommentController@createComment')->name('create-comment');
    Route::get('{comment}/delete-comment', 'CommentController@deleteComment')->name('delete-comment');
});
Route::group([
    'prefix' => 'user', 
    'as'=>'user.',
    'middleware'=>['auth','user.active']
    ], function () {
    Route::get('list-user', 'UserController@index')->name('list-user');
    Route::get('add-user', 'UserController@addUser')->name('add-user');
    Route::post('create', 'UserController@createUser')->name('create-user');
    Route::get('{user}/edit-user', 'UserController@editUser')->name('edit-user');
});
Route::group(['prefix' => 'admin', 'as'=>'admin.'], function () {
    Route::get('login', 'UserController@login')->name('login');
    Route::post('post-login', 'UserController@postLogin')->name('post-login');
    Route::get('logout', 'UserController@logout')->name('logout');
    Route::get('register', 'UserController@register')->name('register');
    Route::post('create-user', 'UserController@registerUser')->name('create-user');
});


