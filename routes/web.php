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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/p/create', 'PostsController@create')->name('posts.create'); 
Route::get('/p/{post}', 'PostsController@show'); 
Route::get('/p', 'PostsController@index')->name('posts.index');
Route::post('/p', 'PostsController@store'); 
