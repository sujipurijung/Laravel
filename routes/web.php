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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/myphoto', function () {
    return view('myphoto');
});

Route::get('/calculator', function () {
    return view('calculator');
});
/*
Route::get('/showcalculator', function () {
    return view('showcalculator');
});*/
Route::get('/show','CalController@index');
Route::post('/calculate','CalController@calculate');
Route::get('/showcalculate',function(){
	return view("showcalculator");
});

Route::any('/test', function() {
	Cookie::forget('test2');
	Cookie::queue(cookie('test2', 'Hello worldddd', 3600));
	echo Cookie::get('test2');
});

/*Route::get('/cart','CartController@index');
Route::get('/cart/orderProduct','CartController@orderProduct');*/