<?php

<<<<<<< HEAD
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

Route::get('/show','CalController@index');
Route::post('/calculate','CalController@calculate');

Route::get('/showcalculate',function(){
	return view("showcalculator");
});

Route::get('/index','CalculateController@index');
Route::post('/add','CalculateController@add');
Route::post('/val','CalculateController@val');

=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function() { 
	return view('foo');
});

Route::get('/example', function() { 
	return view('example.example')
			->with('name','John');
});

Route::get('/example2', function() { 
	return view('example.example2');
});

Route::get('/calculator','CalculatorController@index' );
Route::post('/add','CalculatorController@add');
Route::post('/val','CalculatorController@val');

Route::get('/cart','CartController@index');

Route::get('/cart/orderProduct','CartController@orderProduct');
>>>>>>> 7814c2ca6594f3232ed025701c66e886b1325abb
