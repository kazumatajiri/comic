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
    Route::post('/create','ComicController@create');
    Route::get('/result','ComicController@result');
    Route::get('/update','ComicController@update');
    Route::get('/list','ComicController@list');
    Route::get('/listplus','ComicController@plus');
    Route::get('/','ComicController@top');
    Route::get('/list','ComicController@edit')->middleware('auth');
    Route::post('/list','ComicController@update')->middleware('auth');
    Route::get('/listplus','ComicController@delete')->middleware('auth');

});
