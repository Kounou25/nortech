<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/libra', function () {
    return view('libra.login');
});

Route::get('/register', function () {
    return view('libra.register');
});

Route::get('/libra/index', function () {
    return view('libra.index');
});



