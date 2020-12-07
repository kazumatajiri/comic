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



Route::group(['prefix' => 'comic'],function(){
    Route::get('/add','ComicController@add');
    Route::get('/','ComicController@index');
    Route::get('/result','ComicController@result');
});
