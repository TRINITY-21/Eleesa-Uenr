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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::auth();

Route::get('/', 'PagesController@index');

Route::get('/news', 'PagesController@getNews');

Route::get('/history', 'PagesController@getHistory');

Route::get('/constitution', 'PagesController@getConstitution');

Route::get('/home', 'HomeController@index');

Route::resource('admin', 'AdminController');

Route::post('/courses', 'CoursesController@getCourses');
