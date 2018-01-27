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

Route::get('/','HomeController@index')->name('home');

Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::resource('admin/users', 'UserController');

Route::resource('admin/roles', 'RoleController');

Route::resource('admin/permissions', 'PermissionController');

Route::resource('admin/trips', 'TripController');

Route::get('trips','TripController@index')->name('trips');
Route::get('trips/{id}','TripController@show');
Route::post('trips/{id}/reservation','ReservationController@store')->name('reservation.store');

Route::get('reservations','ReservationController@index')->name('reservations');
Route::get('reservations/{id}','ReservationController@show')->name('reservations.show');
Route::get('reservations/{id}/edit','ReservationController@edit')->name('reservations.edit');
Route::put('reservations/{id}','ReservationController@update')->name('reservations.update');
Route::delete('reservations/{id}','ReservationController@destroy')->name('reservations.destroy');
