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
//Laravel welcome page
Route::get('/', function () {
    return view('welcome');
});

//login pege
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'MenuController@index');

Route::post('/date', 'DateController@index');

Route::post('/check', 'CheckController@index');

//シーディング
Route::get('/owner/index', 'OwnerController@index');
