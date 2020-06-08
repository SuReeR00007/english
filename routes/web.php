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

Route::get('/', 'TeachController@home');
Route::get('/abc', 'TeachController@abc');
Route::get('/words', 'TeachController@words');
Route::get('/translate', 'TeachController@translate');