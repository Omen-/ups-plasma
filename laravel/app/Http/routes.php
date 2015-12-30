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

Route::get('about', [function()
{
  $filename = 'plaquette.pdf';
  return Response::make(file_get_contents(storage_path().DIRECTORY_SEPARATOR.$filename), 200, [
      'Content-Type' => 'application/pdf',
      'Content-Disposition' => 'inline; '.$filename,
    ]);
}]);

Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy']]);

Route::group(['middleware' => ['guest']], function()
{
  Route::get('login', 'SessionsController@create');
  Route::post('login', 'SessionsController@store');
});

Route::group(['middleware' => ['auth']], function()
{
  //Route::get('/profile', '@show');
  Route::get('/calendar', 'CalendarController@index');
  Route::get('logout', 'SessionsController@destroy');
});

Route::group(['middleware' => ['auth', 'admin']], function()
{
  Route::get('/admin/page/create', 'PagesController@create');
  Route::post('/admin/page/store', 'PagesController@store');
  Route::get('/admin/page/edit/{id}', 'PagesController@edit');
  Route::post('/admin/page/update/{id}', 'PagesController@update');
  Route::get('/admin/page/index', 'PagesController@index');
  Route::get('/admin/page/destroy/{id}', 'PagesController@destroy');

  Route::get('/admin/news/create', 'NewsController@create');
  Route::post('/admin/news/store', 'NewsController@store');
  Route::get('/admin/news/edit/{id}', 'NewsController@edit');
  Route::post('/admin/news/update/{id}', 'NewsController@update');
  Route::get('/admin/news/index', 'NewsController@index');
  Route::get('/admin/news/destroy/{id}', 'NewsController@destroy');
});

Route::get('/page/{id}-{title}', 'PagesController@show');

Route::get('/news/{id}-{title}', 'NewsController@show');
Route::get('/news', 'NewsController@all');
