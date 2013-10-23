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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('authors', array('as'=>'authors','uses'=>'AuthorsController@getIndex'));
Route::get('author/{id}', array('as'=>'author', 'uses'=>'AuthorsController@getView'));
Route::get('authors/new', array('as'=>'newAuthor','uses' => 'AuthorsController@getNew'));
Route::get('authors/{id}/edit', array('as'=>'editAuthor','uses' => 'AuthorsController@getEdit'));
Route::post('authors/create', array('before' => 'crsf', 'uses'=>'AuthorsController@postCreate'));
Route::post('authors/delete', array('before' => 'crsf','uses'=>'AuthorsController@postDestroy'));
Route::put('authors/update', array('before' => 'crsf', 'uses'=>'AuthorsController@putUpdate'));

