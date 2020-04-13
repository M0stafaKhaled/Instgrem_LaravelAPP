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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/p', 'PostController@store');

Route::post('follow/{user}', 'FollowsController@stroe');
Route::get('/p/create', 'PostController@create');

Route::get('/p/{post}', 'PostController@show')->name('post.show');


Route::patch('/Profile/{user}', 'ProfileController@update')->name('profile.updae');
Route::get('/Profile/{user}', 'ProfileController@index')->name('home');
Route::get('/Profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
