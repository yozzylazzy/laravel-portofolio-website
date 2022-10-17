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
    $title = Str::upper('yozzylazzy homepage');
    $contact = [["email" => "yozzylazzy@yahoo.com",
                "phone" => "087825650174",
                "line" => "@yosefadrian"]];
    return view('home')->with('title',$title)->with('contact', $contact);
});

Route::get('/about', function () {
    return view('about', ['topic' => 'About']);
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
