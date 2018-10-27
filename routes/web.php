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


Route::get('/tasks', 'TaskController@index')->name('index');
Route::get('/tasks/create', 'TaskController@create')->name('create');

Route::post('/tasks', 'TaskController@store')->name('store');

Route::get('/tasks/{task}', 'TaskController@show')->name('show');

Route::get('/tasks/{task}/edit', 'TaskController@edit')->name('edit');

Route::put('/tasks/{task}', 'TaskController@update')->name('update');
Route::DELETE('/tasks/{task}', 'TaskController@destroy')->name('update');


Route::get('/demo', function () {
    return view('demo');
});