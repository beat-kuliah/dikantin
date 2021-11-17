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

Route::get('/', 'AllController@welcome');
Route::get('/home', 'AllController@home');
Route::get('/help', 'AllController@help');
Route::get('/partnership', 'AllController@partnership');
Route::get('/contact', 'AllController@contact');
Route::get('/aboutus', 'AllController@aboutus');
