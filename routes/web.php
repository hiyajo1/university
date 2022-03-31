<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/auth', function () {
    return view('auth');
});
