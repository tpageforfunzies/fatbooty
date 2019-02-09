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

Route::get('/ronchron', 'RonChrontroller@index');

Route::get('/jhoot', 'JhootController@index');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->middleware('auth');
