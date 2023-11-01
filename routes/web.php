<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('loading');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/reservasi', function () {
    return view('welcome');
});
Route::get('/pendukung1', function () {
    return view('pendukung1');
});

