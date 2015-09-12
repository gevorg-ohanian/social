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

Route::resource('/','LoginController');
//Route::resource('login','LoginController');
Route::resource('register', 'RegisterController');



Route::group(array('after' => 'auth'), function()
{
    Route::get('home', 'HomeController@Home');
    Route::get('home/logout','HomeController@logout');
    Route::get('message','MessageController@messageIndex');
});