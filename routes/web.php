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

Route::get('/login', 'RegisterController@login');
Route::post('/registerPost', 'RegisterController@store');
Route::post('/loginPost', 'RegisterController@loginPost');
Route::put('/courier/{id}', 'CourierController@update');
Route::get('/courier/{id}/edit', 'CourierController@edit');
Route::group(['middleware' => ['web','auth']], function (){ //semua route yg pakai middleware masukin k sini
    Route::get('/insert', function (){
        if(Auth::user()->role == "user"){
            return view('auth.homepage');
        }
        else{
            return view('admin.insert');
        }
    }); //ini contoh, sesuaikan punya kalian
});

Route::get('admin/layout', 'FlowerTypeController@create');
Route::post('admin/layout', 'FlowerTypeController@store');

Route::get('/profile/{id}/edit', 'User@edit');
Route::get('/profile/{id}', 'User@update');

Route::get('/admin/flowers', 'FlowerController@index');
Route::get('/admin/flowers/{id}/edit','FlowerController@edit');
Route::post('/admin/flowers/{id}/update','FlowerController@update');
Route::delete('/admin/flowers/{id}/delete', 'FlowerController@destroy');
Route::get('/admin/flowers/insert', 'FlowerController@create');
Route::post('/admin/flowers/insert', 'FlowerController@store');
