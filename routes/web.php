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

Route::get('/post/create', 'PostsController@create')->name('posts.create'); 
Route::get('/post/{post}', 'PostsController@show'); 
Route::get('/post', 'PostsController@index')->name('posts.index');
Route::post('/post', 'PostsController@store'); 

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profiles.show');
Route::get('/profiles', 'ProfilesController@index')->name('profiles.index');
Route::delete('/profiles/{user}', 'ProfilesController@destroy');
// Route::get('/profiles/{user}/edit', 'ProfilesController@edit');
// Route::patch('/profiles/{user}', 'ProfilesController@update');

