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

// Main/Home/Hotel Listing Routes...
Route::get('/', 'HotelController@index');

// Single Hotel Routes...
Route::get('detail/{id}', ['as' => 'detail.show', 'uses' => 'HotelController@show'] );

// post comment Routes...
Route::post('comment', 'HotelController@postComment');

// Hotel Creation Routes...
Route::get('admin', 'adminController@index');
Route::post('admin', 'adminController@add');

// Calling Authenication Routes
Route::auth();
