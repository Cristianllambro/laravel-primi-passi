<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home-sito');

Route::get('/contact', function () {
    return view('contact');
})->name('contatti-sito');

Route::get('/info', function () {
    return view('info');
})->name('info-sito');

Route::get('/about', function () {
    return view('about');
})->name('about-sito');

