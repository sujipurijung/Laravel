<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('wel');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/myphoto', function () {
    return view('myphoto');
});

/*Route::get('/calculator', function () {
    return view('calculator');
});
Route::get('/showcalculator', function () {
    return view('showcalculator');
});*/



Route::get('/calculator','CalController@index');

Route::get('/calculator/show','CalController@show');