<?php

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/signup', 'SignupController@index');
Route::post('/signup', 'SignupController@signup');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
Route::get('/playlists', 'PlaylistsController@index');
Route::get('/playlists/new', 'PlaylistsController@create');
Route::get('/playlists/{id}', 'PlaylistsController@show');
Route::post('/playlists', 'PlaylistsController@store');

Route::middleware(['protected'])->group(function () {
    Route::get('/profile', 'AdminController@index');
    Route::get('/invoices', 'InvoicesController@index');
    Route::get('/invoices/{id}', 'InvoicesController@show');
    Route::get('/phpinfo', function() {
      echo phpinfo();
    });
});

Route::get('/login/twitter', 'LoginController@redirectToTwitter');
Route::get('/login/twitter/callback', 'LoginController@handleTwitterCallback');
Route::post('/tweets', 'TwitterController@store');
