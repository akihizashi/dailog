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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', 'LoginController@index');
Route::get('/mainlog', 'MainlogController@index');
Route::get('/divlog', 'DivlogController@index');
Route::get('/profile', 'UserController@index');
Route::get('/test', 'TestController@index');
