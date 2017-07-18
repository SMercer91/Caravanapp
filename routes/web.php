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
Route::get('contact', 'PagesController@getContact');

Route::get('stock', 'PagesController@getStock');

Route::get('caravan', 'PagesController@getCaravan');

Route::get('blogpost', 'PagesController@getBlogpost');

Route::get('bloghome2', 'PagesController@getBloghome2');

Route::get('bloghome1', 'PagesController@getBloghome2');

Route::get('/', 'PagesController@getIndex');
Route::resource('cars', 'CarController');
Route::resource('caravans', 'CaravanController');
Route::get('form', 'PagesController@getForm');
Route::post('/insert', 'Controller@insert');
Route::post('/search', 'Controller@searchresult');
