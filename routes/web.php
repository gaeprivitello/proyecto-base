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
    return view('main');
});


Route::post('/playlist/store','PlaylistController@store');

Route::get('profile', 'Auth\LoginController@userProfile');

Route::get('playlist/create', function () {
    return view('create-list');
});



//Authentication Routes

Auth::routes();

Route::get('login/github', 'Auth\LoginController@redirectToProvider');

Route::get('song/add', 'SongController@search');

Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');