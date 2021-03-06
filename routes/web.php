<?php

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

// view to return when not logged in 
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// route to view once logging in
Route::get('/home', 'HomeController@index')->middleware('auth');


Route::group(['middleware' => 'auth'], function()
{
    Route::resource('reminder', 'RemindersController');
    Route::resource('calendar', 'CalendarController');
    Route::resource('stat-type', 'StatTypeController');
    Route::resource('stats', 'StatsController');
});