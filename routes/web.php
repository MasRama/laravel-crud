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

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/data','DataController@index');

Route::get('/data/tambah','DataController@tambah');

Route::post('/data/store','DataController@store');

Route::get('/data/edit/{id}','DataController@edit');

Route::post('/data/update','DataController@update');

Route::get('/data/hapus/{id}','DataController@hapus');

Route::get('/data/cari','DataController@cari');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
