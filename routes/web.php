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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index')->name('user');
route::get('/user/{id}/edit','UserController@edit');
route::post('/user/{id}/update','UserController@update');
route::post('/user/create','UserController@update');
route::get('/user/{id}/delete','UserController@delete');
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');

Route::get('/Vidios','VidioController@index');

Route::get('back','VidioController@back');

Route::get('create','VidioController@create');

Route::post('insert', 'VidioController@insert');

Route::get('delete/{id}','VidioController@delete');

Route::get('edit/{id}','VidioController@edit');

Route::post('update/{id}', 'VidioController@update');

Route::post('updatepengajuan/{id}', 'HomeController@update');




