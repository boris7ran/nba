<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'all-teams', 'uses' => 'TeamsController@index']);

Route::get('/register', ['as' => 'register-user', 'uses' => 'RegistrationController@create']);
Route::post('/register', ['as' => 'store-register', 'uses' => 'RegistrationController@store']);

Route::get('/login', ['as' => 'login-user', 'uses' => 'LoginController@create']);
Route::post('/login', ['as' => 'store-login', 'uses' => 'LoginController@store']);

Route::get('/logout', ['as' => 'logout-user', 'uses' => 'LoginController@destroy']);

Route::get('/news/create', ['as' => 'create-news', 'uses' => 'NewsController@create']);
Route::post('/news', ['as' => 'store-news', 'uses' => 'NewsController@store']);

Route::get('/news', ['as' => 'all-news', 'uses' => 'NewsController@index']);
Route::get('/news/{id}', ['as' => 'single-news', 'uses' => 'NewsController@show']);
Route::get('/news/team/{name}', ['as' => 'team-news', 'uses' => 'NewsController@teamNews']);

Route::get('/verify/{id}', ['as' => 'verify-user', 'uses' => 'RegistrationController@verify']);

Route::post('/teams/{id}/comments', ['as' => 'comments-team', 'uses' => 'CommentsController@store']);

Route::get('/teams/{id}', ['as' => 'single-team', 'uses' => 'TeamsController@show']);

Route::get('/players/{id}', ['as' => 'single-player', 'uses' => 'PlayersController@show']);