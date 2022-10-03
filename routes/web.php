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
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/game', function () {
    return view('development.game');
});

Route::get('/web', function () {
    return view('development.web');
});

Route::get('/mobile', function () {
    return view('development.mobile');
});

Route::get('/machinelearning', function () {
    return view('research.machinelearning');
});

Route::get('/deeplearning', function () {
    return view('research.deeplearning');
});
