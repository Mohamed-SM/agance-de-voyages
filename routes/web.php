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

Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');

Route::resource('admin/users', 'UserController');

Route::resource('admin/roles', 'RoleController');

Route::resource('admin/permissions', 'PermissionController');

Route::resource('admin/trips', 'TripController');

Route::get('trips','TripController@userindex')->name('trips');
Route::get('trips/{id}','TripController@usershow');
Route::post('trips/{id}/reservation','ReservationController@store')->name('reservation.store');

Route::get('admin/reservations','ReservationController@index')->name('reservations.index');
Route::get('reservations','ReservationController@userindex')->name('reservations');
Route::get('reservations/{id}','ReservationController@show')->name('reservations.show');
Route::get('reservations/{id}/edit','ReservationController@edit')->name('reservations.edit');
Route::put('reservations/{id}','ReservationController@update')->name('reservations.update');
Route::delete('reservations/{id}','ReservationController@destroy')->name('reservations.destroy');

Route::get('admin','AdminController@index')->name('admindashboard');

Route::get('dashboard/profile','UserController@editprofile')->name('profile');
Route::put('dashboard/profile/','UserController@updateprofile')->name('profile.update');