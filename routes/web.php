<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
