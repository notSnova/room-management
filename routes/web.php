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

Route::get('/', function () {
    return view('home');
});

// Login
Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@login_check');
Route::get('logout', 'LoginController@logout');

// Admin Dashboard
Route::get('admin', function () {
    return view('dashboard');
});

// Room Routes
Route::get('admin/room/{id}/delete', 'RoomController@destroy');
Route::resource('admin/room', RoomController::class);
