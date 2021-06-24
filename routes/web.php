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


Route::get('/', 'UserController@index');
Route::get('/login', 'UserController@login');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/register', 'UserController@register');
Route::post('/registerPost', 'UserController@registerPost');
Route::get('/logout', 'UserController@logout');

Route::get('/utif', function () {
    return view('utif');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/kartu', function () {
    return view('kartu');
});


Route::get('/utif', 'utifController@index');
Route::get('utif/create', 'utifController@create');
Route::post('/utif/store', 'utifController@store');
Route::get('/utif/edit/{id}', 'utifController@edit');
Route::post('/utif/update', 'utifController@update');
Route::get('/utif/destroy/{id}', 'utifController@destroy');
