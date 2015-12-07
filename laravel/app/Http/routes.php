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

Route::get('/news', 'NewsController@index');

Route::get('/calendar/{id}', 'CalendarController@show');

Route::get('about', [function()
{
  $filename = 'plaquette.pdf';
  return Response::make(file_get_contents(storage_path().DIRECTORY_SEPARATOR.$filename), 200, [
      'Content-Type' => 'application/pdf',
      'Content-Disposition' => 'inline; '.$filename,
    ]);
}]);

Route::get('login', 'SessionsController@create');
Route::post('login', 'SessionsController@store');
Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy']]);

Route::get('/page/{id}-{title}', 'PagesController@show');
Route::get('/admin/page/create', 'PagesController@create');
Route::post('/admin/page/store', 'PagesController@store');
Route::get('/admin/page/edit/{id}', 'PagesController@edit');
Route::post('/admin/page/update/{id}', 'PagesController@update');
Route::get('/admin/page/index', 'PagesController@index');
Route::get('/admin/page/destroy/{id}', 'PagesController@destroy');
