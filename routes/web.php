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


Auth::routes();
Route::get('/', 'HomeController@index')->name('index');


Route::get('/home', 'HomeController@home')->name('home')->middleware('auth');

Route::get('/home/create/article','HomeController@createArticle')->name('user.article')->middleware('auth');