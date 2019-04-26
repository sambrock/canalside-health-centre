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

Route::get('login','FrontController@login')->name('login');
Route::post('login/check','FrontController@checkLogin');
Route::get('logout','FrontController@logout');

Route::get('patients', 'FrontController@list')->middleware('auth');
Route::get('patients/{searchTerm}', 'FrontController@searchNames')->middleware('auth');
Route::get('details/{patientId}','FrontController@details')->middleware('auth');
Route::get('register','FrontController@register')->middleware('auth');
Route::post('save/{action}/{patientId}','FrontController@save')->middleware('auth');
Route::get('update/{patientId}','FrontController@update')->middleware('auth');
Route::get('delete/{patientId}','FrontController@delete')->middleware('auth');
Route::get('book','FrontController@book')->middleware('auth');
Route::get('book/{patientId}','FrontController@patientBookDetails')->middleware('auth');
Route::post('book-appointment','FrontController@bookAppointment')->middleware('auth');
Route::post('check-availability','FrontController@checkAvailability')->middleware('auth');

