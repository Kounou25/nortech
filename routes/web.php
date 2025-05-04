<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/libra', function () {
    return view('bibliotech.index');
});

Route::get('/register', function () {
    return view('bibliotech.register');
});

Route::get('/home', function () {
    return view('bibliotech.home');
});

