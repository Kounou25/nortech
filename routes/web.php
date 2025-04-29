<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/bibliotech', function () {
    return view('bibliotech.index');
});

