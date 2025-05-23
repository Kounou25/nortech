<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;

use App\Http\Controllers\FiliereController;





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
// Route::get('/libra/index', function () {
//     return view('libra.index');
// })->name('index');

Route::get('/libra/login', function () {
    return view('libra.login');
})->name('login');

Route::post('/libra/login', [UserController::class, 'login'])->name('login');
Route::get('/libra/teachers', [FiliereController::class, 'index'])->name('teachers.index');
Route::post('/libra/teachers', [DocumentController::class, 'store'])->name('store');
Route::get('/libra/index', [DocumentController::class, 'index'])->name('index');
