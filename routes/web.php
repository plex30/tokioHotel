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
Route::get('reserve', 'CalendarController@index')->name('reserve.index');
Route::get('reserve/{mes}', 'CalendarController@index_month');


Auth::routes();



