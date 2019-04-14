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

Route::get('/', 'FrontController@index');
Route::get('patients', 'FrontController@list');
Route::get('name/{searchTerm}', 'FrontController@searchNames');
Route::get('patients/details/{patientId}','FrontController@details');
Route::get('register','FrontController@register');
Route::post('save','FrontController@save');
Route::get('deletelist','FrontController@deleteList');
Route::post('delete','FrontController@delete');

