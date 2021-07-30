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

Route::get('/test_submit','TestController@show');
Route::post('/test_submit','TestController@submit');
Route::any('/create_question','TestController@create_question');
Route::post('/todo_submit','TestController@store');
Route::get('/todo_show','TestController@todo_show');
Route::get('/todo_delete/{id}','TestController@destroy');
Route::get('/todo_edit/{id}','TestController@edit');
