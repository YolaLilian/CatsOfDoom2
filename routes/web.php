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

Route::Get('/nope', 'NopeController@index')->name('nope');

Route::post('like/{post}', 'LikesController@store');

Route::get('/post', 'PostsController@index')->name('posts.index');
Route::post('/post/filtered', 'PostsController@filter')->name('posts.filtered');
Route::get('/post/create', 'PostsController@create')->name('posts.create'); 
Route::post('/post', 'PostsController@store'); 
Route::get('/post/{post}', 'PostsController@show'); 

Route::get('/profiles', 'ProfilesController@index')->name('profiles.index');
Route::get('/profiles/{user}', 'ProfilesController@show')->name('profiles.show');
Route::patch('/profiles/{user}', 'ProfilesController@update')->name('profiles.update');
Route::delete('/profiles/{user}', 'ProfilesController@destroy');
Route::get('/profiles/{user}/edit', 'ProfilesController@edit')->name('profiles.edit');

