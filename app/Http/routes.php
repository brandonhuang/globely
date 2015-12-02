<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('products', 'ProductsController');
Route::resource('users', 'UsersController');
Route::get('users', ['middleware' => 'auth','uses' => 'UsersController@index']);
Route::get('products', ['middleware' => 'auth','uses' => 'ProductsController@index']);
Route::get('users/{id}/edit', ['middleware' => 'auth','uses' => 'UsersController@edit']);
Route::post('users/{id}/edit', ['middleware' => 'auth','uses' => 'UsersController@update']);
Route::get('products/{id}/edit', ['middleware' => 'auth','uses' => 'ProductsController@edit']);
Route::post('products/{id}/edit', ['middleware' => 'auth','uses' => 'ProductsController@update']);


Route::controller('/', 'StaticController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);
