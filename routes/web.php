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
Route::get('admin/cliente', 'AdminController@indexCli')->name('admin.indexCli');
Route::get('admin/room', 'AdminController@indexRoom')->name('admin.indexRoom');
Route::get('admin/reserva', 'AdminController@indexRev')->name('admin.indexRev');
Route::get('admin/{user}/edit', 'AdminController@editCli')->name('admin.editCli');
Route::get('admin/room/{room}/edit', 'AdminController@editRoom')->name('admin.editRoom');
Route::get('admin/reserve/{uroom}/edit', 'AdminController@editRev')->name('admin.editRev');
Route::delete('admin/cliente/{user}', 'AdminController@destroyCli')->name('admin.destroyCli');
Route::delete('admin/room/{room}', 'AdminController@destroyRoom')->name('admin.destroyRoom');
Route::delete('admin/reserva/{uroom}', 'AdminController@destroyRev')->name('admin.destroyRev');
Route::put('admin/cliente/{user}', 'AdminController@updateCli')->name('admin.updateCli');
Route::put('admin/room/{room}', 'AdminController@updateRoom')->name('admin.updateRoom');
Route::put('admin/reserva/{uroom}', 'AdminController@updateRev')->name('admin.updateRev');
Route::post('reserve', 'ReserveController@reserva')->name('reserve.reserva');
Route::post('reserve', 'ReserveController@reserva')->name('reserve.reserva');
Route::post('/send', 'ContactController@sendEmail')->name('contact.sendEmail');
Auth::routes();





