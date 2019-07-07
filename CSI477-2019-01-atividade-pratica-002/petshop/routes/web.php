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

//Route::get('/', function () {
//    return view('procedures.index');
//});

Route::resource('/procedures', 'ProcedureController');

Route::resource('/users', 'UserController');

Route::resource('/tests', 'TestController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/adm', 'AdmController@index')->name('adm')->middleware('auth');