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

/*
Route::group(array('prefix'=>'api/vi'), function() {
	Route::get('index', 'User_Controller');
});
*/

Route::get('/', 'User_Controller@index');

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
