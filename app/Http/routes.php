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
    return view('home');
});

// Route allows the developer to view logs from the \logs uri
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

// Route uses the BeerController to direct the user to the beer page to view list of recipes 
Route::get('/beer', 'BeerController@getBeer');
Route::post('/beer', 'BeerController@postBeer');
Route::get('/beer/recipe', 'BeerController@getRecipe');
Route::get('/beer/recipe/create', 'BeerController@getCreate');

// Route uses the BeerController to direct the user to the user pages to login/add/modify accounts
Route::get('/user', 'UserController@getUser');
Route::post('/user', 'UserController@postUser');
Route::get('/user/create', 'UserController@getCreate');
Route::get('/user/modify', 'UserController@getModify');
Route::get('/login', 'UserController@getLogin');
