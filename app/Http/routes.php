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

Route::group(['middleware' => ['web']], function () {

    /*Route::get('/', function () {
        return view('welcome');
    });*/

    /*Route::get('/', function() {
    	return view('index');
    });*/

    Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

    Route::post('/', array('as' => 'ajax', 'uses' => 'HomeController@ajax'));

});
