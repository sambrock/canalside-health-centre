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
Route::get('patients', 'FrontController@list')->middleware('receptionist');
Route::get('patients/{searchTerm}', 'FrontController@searchNames')->middleware('receptionist');
Route::get('details/{patientId}','FrontController@details')->middleware('receptionist');
Route::get('register','FrontController@register')->middleware('receptionist');
Route::post('save/{action}/{patientId}','FrontController@save');
Route::get('update/{patientId}','FrontController@update')->middleware('receptionist');
Route::get('delete/{patientId}','FrontController@delete')->middleware('receptionist');
Route::get('appointments','FrontController@appointments')->middleware('receptionist');
Route::get('cancel/{appointmentId}','FrontController@cancel')->middleware('receptionist');
Route::get('book','FrontController@book')->middleware('receptionist');
Route::get('book/{patientId}','FrontController@patientBookDetails')->middleware('receptionist');
Route::post('book-appointment','FrontController@bookAppointment')->middleware('receptionist');
Route::post('check-availability','FrontController@checkAvailability')->middleware('receptionist');
Route::get('my-details','FrontController@myDetails')->middleware('patient');
Route::get('my-details/update','FrontController@myDetailsUpdate')->middleware('patient');
