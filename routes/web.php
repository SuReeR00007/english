<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TeachController@home');
Route::get('/abc', 'TeachController@abc');
Route::get('/words', 'TeachController@words');
Route::get('/translate', 'TeachController@translate');
Route::post('/check', 'TeachController@check');
Route::get('/check', 'TeachController@check');
