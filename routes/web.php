<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Auth\LoginController@ShowLoginForm');
Route::get('/home', 'PagesController@getHome');
Route::resource('contact', 'ContactController', ['except' => 'create']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();