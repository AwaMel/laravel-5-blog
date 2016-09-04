<?php


Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

Route::get('/register', ['as' => 'register', 'uses' => 'UsersController@create']);
Route::post('/register', ['as' => 'register', 'uses' => 'UsersController@store']);