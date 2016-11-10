<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	if (Auth::guest()) {
        return view ('auth/login');
	}
    else {
    	return redirect()->action('HomeController@index');
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/home', 'HomeController@index');

Route::get('/profile', 'UsersController@index');
Route::post('/profile','UsersController@update');

Route::get('/resources/resource_{id}', 'ResouceController@index');
Route::get('/resources/resource_{id}' ,'ResourceController@show');
Route::post('/resources/resource_{id}','ResourceController@update');

Route::get('/primes/prime_{id}', 'PrimeController@index');
Route::get('/primes/prime_{id}' ,'PrimeController@show');
Route::post('/primes/prime_{id}' ,'PrimeController@destroy');


Route::get('/wastes/waste_{id}', 'WasteController@index');
Route::get('/wastes/waste_{id}' ,'WasteController@show');
Route::post('/wastes/waste_{id}' ,'WasteController@destroy');