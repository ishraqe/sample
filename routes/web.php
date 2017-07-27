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

Route::post('/home/create/article','HomeController@createArticle')->name('user.article')->middleware('auth');

Route::get('/home/singleArticle/{id}','HomeController@singleArticle')->name('article.single')->middleware('auth');

Route::get('/home/singleArticle/Edit/{id}','HomeController@singleArticleEdit')->name('article.edit')->middleware('auth');

Route::post('/home/singleArticle/Edit/{id}','HomeController@singleArticleMakeEdit')->name('article.makeEdit')->middleware('auth');


Route::get('/home/singleArticle/delete/{id}','HomeController@singleArticleDelete')->name('article.delete')->middleware('auth');


