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
Auth::routes();

Route::get('/', 'FrontController@index');

Route::get('login','FrontController@login');
Route::post('login/check','FrontController@checkLogin');

Route::get('patients', 'FrontController@list');
Route::get('patients/{searchTerm}', 'FrontController@searchNames');
Route::get('details/{patientId}','FrontController@details');
Route::get('register','FrontController@register');
Route::post('save/{action}/{patientId}','FrontController@save');
Route::get('update/{patientId}','FrontController@update');
Route::get('delete/{patientId}','FrontController@delete');
Route::get('book','FrontController@book');
Route::get('book/{patientId}','FrontController@patientBookDetails');
Route::post('book-appointment','FrontController@bookAppointment');
Route::post('check-availability','FrontController@checkAvailability');

