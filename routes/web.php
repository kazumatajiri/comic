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

Route::group(['prefix' => 'admin'], function(){
    Route::get('comics/create','Admin\ComicController@add');
    Route::post('comics/create','Admin\ComicController@create');
    Route::get('comics/edit','Admin\ComicController@edit');
    Route::post('comics/update','Admin\ComicController@update');
});
