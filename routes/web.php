<?php

use Illuminate\Support\Facades\Route;

/*

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

Route::get('/', 'GameController@index')->name('game_home');
Route::get('/home', 'GameController@index')->name('game_home');

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
Route::resource('questions', 'QuestionController');
// Route::group(['prefix' => 'question'], function() {

//    Route::get('/add', 'QuestionController@add');
//    Route::get('/view', 'QuestionController@viewAll');

//});

Route::get('/easy','GameController@easy')->name('game_easy');
Route::get('/medium','GameController@medium')->name('game_medium');
Route::get('/hard','GameController@hard')->name('game_hard');
