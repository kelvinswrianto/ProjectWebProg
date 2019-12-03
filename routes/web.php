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

Route::get('/homepage', 'HomeController@index');
Route::get('/register', 'RegisterController@register');
Auth::routes();

Route::get('/', 'RegisterController@login')->name('login');

Route::get('/admin', function () {
    return view('admin.insert_type');
});

Route::get('/flowers/{id}', 'FlowerDetailsController@detail');
Route::get('/flowers/{id}/orderdetail', 'FlowerDetailsController@orderdetail');
Route::get('/flowers/{id}/order', 'RegisterController@order');
Route::get('/logout', 'HomeController@logout');
Route::get('/homepage/search', 'HomeController@search');
Route::get('/login', 'RegisterController@login');
Route::post('/registerPost', 'RegisterController@store');
Route::post('/loginPost', 'RegisterController@loginPost');
Route::put('/courier/{id}', 'CourierController@update');
Route::get('/courier/{id}/edit', 'CourierController@edit');
Route::get('admin/layout', 'FlowerTypeController@create');
Route::post('admin/layout', 'FlowerTypeController@store');


Route::get('/admin/flowers', 'FlowerController@index')->middleware('admin');
Route::get('/admin/flowers/{id}/edit','FlowerController@edit')->middleware('admin');
Route::post('/admin/flowers/{id}/update','FlowerController@update')->middleware('admin');
Route::delete('/admin/flowers/{id}/delete', 'FlowerController@destroy')->middleware('admin');
Route::get('/admin/flowers/insert', 'FlowerController@create')->middleware('admin');
Route::post('/admin/flowers/insert', 'FlowerController@store')->middleware('admin');
Route::get('/admin/flowers/type', 'FlowerTypeController@index')->middleware('admin');
Route::get('/admin/flowers/type/{id}/edit','FlowerTypeController@edit')->middleware('admin');
Route::post('/admin/flowers/type/{id}/update','FlowerTypeController@update')->middleware('admin');
Route::delete('/admin/flowers/type/{id}/delete', 'FlowerTypeController@destroy')->middleware('admin');
Route::get('/admin/flowers/search', 'FlowerController@search')->middleware('admin');
Route::get('/admin/flowers/type/search', 'FlowerTypeController@search')->middleware('admin');
Route::get('/admin/flowers/type/insert', 'FlowerTypeController@create')->middleware('admin');
Route::post('/admin/flowers/type/insert', 'FlowerTypeController@store')->middleware('admin');

Route::get('/profile/edit', 'ProfileController@edit');
Route::put('/profile', 'ProfileController@update');

