<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


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


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */


    Route::get('/', function () {
        return view('welcome');
    });




    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'AuthController@show')->name('auth.show');
        Route::post('/login', 'AuthController@login')->name('auth.perform');

    //Route::get('login', 'App\Http\Controllers\AuthController@showLogin');
    //Route::get('login', array( 'uses' => 'AuthController@showLogin'));

        /**
         * Remind password Routes
         */
        Route::get('/remindpassword', 'AuthController@remindpassword')->name('auth.remind_password');
        Route::post('/remindpassword', 'AuthController@remindpassword')->name('auth.remind_password');


    });

});
