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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/about', 'HomeController@about');

Route::get('/people', 'PeopleController@index');
Route::get('/people/create', 'PeopleController@create');
Route::post('/people', 'PeopleController@store');
//Route::delete('/people/{id}', 'PeopleController@destroy');
Route::delete('/people/{people}', 'PeopleController@destroy');
Route::get('/people/{id}/edit', 'PeopleController@edit');
Route::put('/people/{id}', 'PeopleController@update');
Route::get('/people/{id}', 'PeopleController@show');
