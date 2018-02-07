<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoices', 'InvoicesController@index');
Route::get('/invoices/{id}', 'InvoicesController@show');
Route::get('/playlists', 'PlaylistsController@index');
Route::get('/playlists/{id}', 'PlaylistsController@show');

Route::get('/phpinfo', function() {
  echo phpinfo();
});
