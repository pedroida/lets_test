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

Route::get('/index', 'ProductController@showIndex')->name('index');

Route::get('/editar/', 'ProductController@invalidURL');

Route::get('/excluir', 'ProductController@invalidURL');

Route::get('/visualizar', 'ProductController@invalidURL');

Route::get('visualizar/{id}', 'ProductController@showItem')->name('ver');


Route::get('/cadastrar', 'ProductController@register')->name('cadastrar');

Route::post('/cadastrar', 'ProductController@save');

Route::get('/editar/{id}', 'ProductController@edit')->name('editar');

Route::post('/editar/{id}', 'ProductController@update');

Route::get('/excluir/{id}', 'ProductController@delete');

Route::get('/error', 'LoginController@error');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
