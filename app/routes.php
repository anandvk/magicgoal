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
Route::resource('books','BookController');



Route::get('data', array('as'=>'print_author','uses'=>'AuthorsController@index'));


Route::get('data/new',array('as'=>'new_author','uses'=>'AuthorsController@newuser'));

Route::get('data/log',array('as'=>'logout','uses'=>'AuthorsController@logout'));
Route::get('data/login',array('as'=>'login','uses'=>'AuthorsController@login'));

Route::post('data/login',array('as'=>'post_login','uses'=>'AuthorsController@auth'));

Route::post('data/new',array('as'=>'post_create','uses'=>'AuthorsController@create'));


Route::get('data/{id}',array('as'=>'show','uses'=>'AuthorsController@view') );
// Route::get('data', array('as'=>'print_author','uses'=>'AuthorsController@index'));

// Route::get('data/login',array('as'=>'login','uses'=>'AuthorsController@login'));

// Route::get('data/log',array('as'=>'logout','uses'=>'AuthorsController@logout'));



// // Route::get('dat',array('as'=>'new_author','uses'=>'AuthorsController@newuser'));




//  Route::post('data/login',array('as'=>'post_login','uses'=>'AuthorsController@auth'));

// Route::post('dat',array('as'=>'post_create','uses'=>'AuthorsController@create'));


// Route::get('data/{id}',array('as'=>'show','uses'=>'AuthorsController@view') );



