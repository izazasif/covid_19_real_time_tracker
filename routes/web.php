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

//health
Route::get('/health','healthController@index')->name('front_event.health');
Route::get('/dis','disController@index')->name('front_event.dis');

//ForntEvent
Route::get('/event', 'FeventController@index')->name('front_event.index');
Route::get('/event-details', 'FeventController@index2')->name('front_event.event-details');
//DashBoard
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');
//appointment Route
Route::get('/home/appointment', 'AppointmentController@index')->name('appointment.index');
Route::post('/home/appointment','AppointmentController@store');
Route::post('/home/appointment/delete','AppointmentController@delete');
Route::get('/home/appointment/edit/{id}', 'AppointmentController@edit')->name('appointment.edit');
Route::post('/home/appointment/edit/{id}','AppointmentController@update');
//Event Route
Auth::routes();
Route::get('/home/event', 'EventController@index')->name('event.index');
Route::post('/home/event','EventController@store');
Route::post('/home/event/delete','EventController@delete');
Route::get('/home/event/edit/{id}', 'EventController@edit')->name('event.edit');
Route::post('/home/event/edit/{id}','EventController@update');