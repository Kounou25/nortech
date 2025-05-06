<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// Page d'accueil
Route::get('/', function () {
    return view('home');
})->name('home');

// Page de connexion
Route::get('/libra', function () {
    return view('libra.login');
})->name('login');

// Page d'inscription
Route::get('/libra/register', function () {
    return view('libra.register');
})->name('register.form');

// Traitement de l'inscription
Route::post('/libra/register', [UserController::class, 'register'])->name('register');

// Page principale de l'application
Route::get('/libra/index', function () {
    return view('libra.index');
})->name('index');

// Tableau de bord (après inscription)
Route::get('/libra/dashboard', function () {
    return view('libra.dashboard');
})->name('dashboard');