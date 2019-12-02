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

Route::get('/layout', function () {
    return view('admin.insert_type');
});
Route::put('/courier/{id}', 'CourierController@update');
Route::get('/courier/{id}/edit', 'CourierController@edit');
Route::get('/profile/{id}/edit', 'User@edit');
Route::get('/profile/{id}', 'User@update');
