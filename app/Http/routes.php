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

get('/', 'PagesController@index');

get('Hvad-Er-Unbu', 'PagesController@hvaderunbu');

get('test', 'PagesController@test');

get('Sådan-Virker-Unbu', 'PagesController@saadanvirkerunbu');

get('Kontakt', 'PagesController@kontakt');

get('Anmeldelser', 'PagesController@anmeldelser');

get('Fordele', 'PagesController@fordele');

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
