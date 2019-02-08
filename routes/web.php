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

Route::get('/db', function () {
	$connectionStatus = DB::connection()
					->getPdo()
					->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
	return view('utility.database', ['data' => $connectionStatus]);
});

Route::get('/tpage', 'TpageController@index');

Route::get('/jhoot', 'JhootController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
