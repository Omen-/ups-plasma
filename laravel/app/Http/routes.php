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

/*Route::group(['middleware' => ['country']], function()
{*/

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
  Route::post('/student-application/store', 'StudentApplicationController@store');
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

  Route::get('/admin/training/index', 'TrainingsController@index');
  Route::post('/admin/training/store', 'TrainingsController@store');
  Route::get('/admin/training/edit/{id}', 'TrainingsController@edit');
  Route::post('/admin/training/update/{id}', 'TrainingsController@update');
  Route::get('/admin/training/destroy/{id}', 'TrainingsController@destroy');

  Route::get('/admin/user/index', 'UsersController@index');
  Route::post('/admin/user/store', 'UsersController@store');
  Route::get('/admin/user/edit/{id}', 'UsersController@edit');
  Route::post('/admin/user/update/{id}', 'UsersController@update');
  Route::get('/admin/user/destroy/{id}', 'UsersController@destroy');

  Route::get('/admin/student/index', 'StudentsController@index');
  Route::post('/admin/student/update', 'StudentsController@changeTraining');

  Route::get('/admin/content/index', 'EditableContentController@index');
  Route::post('/admin/content/store', 'EditableContentController@store');

  Route::get('/admin/student-app/index', 'StudentApplicationController@index');
  Route::get('/admin/student-app/destroy/{id}', 'StudentApplicationController@destroy');
  Route::get('/admin/stored-pdf/show/{id}', 'StoredPdfController@show');

  Route::post('/ajax/image/store', 'EditableContentController@storeImage');
});

Route::get('/page/{id}-{title}', 'PagesController@show');
Route::get('/a/{title}', 'PagesController@alias');
Route::get('/news/{id}-{title}', 'NewsController@show');
Route::get('/news', 'NewsController@all');
//Route::get('/icalendar', function() { return view('important-calendar'); });
Route::get('/raw-calendar', 'CalendarController@show');
/*});*/
