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

//login pege
Auth::routes();
Route::get('/home', 'HomeController@index');
//menu pege
Route::get('/menu', 'MenuController@index');
//date pege
Route::post('/date', 'DateController@index');
//check pege
Route::post('/check', 'CheckController@index');
//complete pege
Route::post('/complete', 'CompleteController@index');
//シーディング
Route::get('/owner/index', 'OwnerController@index');
