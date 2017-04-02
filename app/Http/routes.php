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

//Route::get('/', 'WelcomeController@index');
Route::get('/', 'HomeController@index');

Route::resource('test', 'TestController');

Route::get('home', 'HomeController@index');
Route::get('users', 'HomeController@users');
Route::get('users/new', 'HomeController@usersEntry');
Route::post('users/data', 'HomeController@usersData');
Route::get('users/list', 'HomeController@usersList');
Route::get('users/edit/{id}', 'HomeController@usersEdit');
Route::post('users/update', 'HomeController@usersUpdate');
Route::get('users/delete/{id}', 'HomeController@usersDelete');

Route::get('users/rowquery', 'HomeController@rowQueryTest');

//Route::resource('home','HomeController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
