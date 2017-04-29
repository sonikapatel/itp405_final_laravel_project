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

Route::get('/results', 'SpotController@index')->middleware('protected');
Route::get('/', function()
{
    return view('home');
});
Route::get('/about', function()
{
    return view('about');
})->middleware('protected');
Route::get('/userprofile', function()
{
    return view('userprofile');
})->middleware('protected');
Route::get('/logout', 'LoginController@logout');
Route::post('/', 'SpotController@store');
Route::get('/favorites','SpotController@viewFav')->middleware('protected');
Route::post('/results','SpotController@saveFav')->middleware('protected');

Route::get('/userprofile','LoginController@userprofile');
Route::get('/favorites/{id}', 'SpotController@destroy')->middleware('protected');

Route::post('/userprofile','LoginController@update')->middleware('protected');
Route::get('search', 'SpotController@search')->middleware('protected');
Route::get('/spots/{id}', 'SpotController@viewSpot')->middleware('protected');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/signup', 'SignUpController@index');
Route::post('/signup', 'SignUpController@signup');
Route::get('/admin', 'AdminController@index')->middleware('protected');
