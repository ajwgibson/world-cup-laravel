<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Home page
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

// Instructions page
Route::get('instructions', array('as' => 'instructions', 'uses' => 'HomeController@instructions'));

// Competition entries
Route::group(array('prefix' => 'entry'), function()
{
	Route::get('/',       array('as' => 'entry.index',   'uses' => 'EntryController@index'));

	Route::post('load',   array('as' => 'entry.load',    'uses' => 'EntryController@load'));

	Route::get('create',  array('as' => 'entry.create',  'uses' => 'EntryController@create'));
	Route::post('store',  array('as' => 'entry.store',   'uses' => 'EntryController@store'));

	Route::get('edit',    array('as' => 'entry.edit',    'uses' => 'EntryController@edit'));
	Route::post('update', array('as' => 'entry.update',  'uses' => 'EntryController@update'));

	Route::get('confirm/{confirmation}', array('as' => 'entry.confirm', 'uses' => 'EntryController@confirm'));
});
