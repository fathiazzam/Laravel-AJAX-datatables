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
Route::resource('/toto', 'TotoController');
Route::get('/table/toto', 'TotoController@dataTable')->name('table.toto');

Route::resource('/user', 'UserController');

Route::get('/table/user', 'UserController@dataTable')->name('table.user');

