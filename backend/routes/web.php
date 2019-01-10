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
Route::resource('emailfila','EmailController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('modelo/confirm/{modelo}', ['uses' => 'EmailModeloController@deleteConfirm', 'as' => 'modelo.confirmDelete']);
Route::get('email/confirm/{email}', ['uses' => 'EmailFilaController@deleteConfirm', 'as' => 'email.confirmDelete']);
Route::get('modelo/enviar/{modelo}', ['uses' => 'EmailModeloController@enviar', 'as' => 'modelo.enviar']);
Route::get('modelo/json/emails', ['uses' => 'EmailModeloController@getEmails', 'as' => 'modelo.emailsJson']);
Route::get('modelo/json/modelo/{modelo}', ['uses' => 'EmailModeloController@getModelo', 'as' => 'modelo.getModelo']);

Route::post('modelo/enviar/enviarJson', ['uses' => 'EmailController@enviar', 'as' => 'emailfila.enviar']);
