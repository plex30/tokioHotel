<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('home');
}); */

Route::get('/', 'HomeController@index')->name('home');

Route::get('experience', 'ExperienceController@index')->name('experience.index');
Route::get('contact', 'ContactController@index')->name('contact.index');
Route::resource('reserve', 'ReserveController');
Route::resource('user', 'UserController');
/* Route::get('reserve', 'ReserveController@index')->name('reserve.index');
Route::post('reserve/show/{id}', 'ReserveController@showReserva')->name('reserve.show'); */
Route::post('reserve', 'ReserveController@reserva')->name('reserve.reserva');


Auth::routes();





