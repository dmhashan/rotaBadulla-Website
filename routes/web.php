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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/routetest', function () {
	echo "POST";
	echo "&nbsp";
	echo "<a href='/'>X</a>";
});

Route::put('/routetest', function () {
	echo "PUT";
	echo "&nbsp";
	echo "<a href='/'>X</a>";
});

Route::delete('/routetest', function () {
	echo "DELETE";
	echo "&nbsp";
	echo "<a href='/'>X</a>";
});

Route::get('/dbtest/{id}', 'TestController@dbtest');
Route::get('/dbtest2/{id}', 'TestController@dbtest2');

Route::get('blade', function () {
    return view('child');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
