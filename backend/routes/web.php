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

Route::resource('modelo', 'EmailModeloController');
Route::resource('email',   'EmailFilaController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('modelo/confirm/{modelo}', ['uses' => 'EmailModeloController@deleteConfirm', 'as' => 'modelo.confirmDelete']);
Route::get('email/confirm/{email}', ['uses' => 'EmailFilaController@deleteConfirm', 'as' => 'email.confirmDelete']);
