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

Route::get('/', 'HomeController@home');

Route::get('/news/{id}-{title}', 'NewsController@show');

Route::get('profile', ['middleware' => 'auth', function()
{
  return 'Profile of ' . Auth::user()->email;
}]);

Route::get('login', 'SessionsController@create');
Route::post('login', 'SessionsController@store');
Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy']]);
