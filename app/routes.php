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
//
// Route::get('admin', function(){
//   return View::make('hello');
//
//
// })->before('auth.basic');

Route::get('admin', 'LangController@index')->before('auth.basic');
Route::get('change', 'LangController@change')->before('auth.basic');
