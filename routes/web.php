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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "huynh";
});

Route::group(['prefix' => 'MyGroup'], function () {
    Route::get('User1', function () {
        echo "User1";
    });
    Route::get('User1', function () {
        echo "User1";
    });
    Route::get('User1', function () {
        echo "User1";
    });
});

Route::get('GoiController', 'MyController@XinChao');
Route::get('ThamSo/{ten}', 'Mycontroller@KhoaHoc');
Route::get('MyRoute', 'MyController@GetURL');

Route::get('getForm', function () {
    return view('post_form');
});

Route::post('postForm', 'MyController@postForm')->name('postForm');

Route::get('qb/get', function () {
    $data = DB::table('users')->get();
    dd($data);
});


Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/new', 'ProductController@create')->name('products.create');
Route::post('products/store', 'ProductController@store')->name('products.store');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::put('products/{id}/edit', 'ProductController@update')->name('products.update');
Route::get('products/{id}/delete', 'ProductController@destroy')->name('products.destroy');