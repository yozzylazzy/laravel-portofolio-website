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
    $title = Str::upper('about yozzylazzy');
    $contact = [["bidang" => "Web Development","kemampuan" => "HTML5, CSS3, PHP, JavaScript,
    Laravel, React JS", 
    "proyek" => "Web Portofolio, Web Blog, Web E-Commerce, Web Sistem Informasi, 
    Web Sistem Informasi Akademik, Web Sistem Informasi Perpustakaan",
    "ongoing" => "Smart Web, Multi Platform Website"],
    ["bidang" => "Game Development","kemampuan" => "Unity, C#, Blender, Adobe Photoshop, Adobe Ilustrator", 
    "proyek" => "Game 2D, Game 3D, Game Mobile, Game RPG, Music Game, Turn Based RPG",
    "ongoing" => "MMORPG"],
    ["bidang" => "Application Development","kemampuan" => "Java, Kotlin, Flutter, Dart, Adobe Photoshop, Adobe Ilustrator", 
    "proyek" => "Application Mobile, Application Desktop, Application Web",
    "ongoing" => "Application Mobile"],
    ["bidang" => "Machine Learning","kemampuan" => "Python, Numpy, Pandas, Matplotlib, Scikit-Learn, Tensorflow, Keras",
    "proyek" => "Machine Learning, Deep Learning, Artificial Intelligence",
    "ongoing" => "Machine Learning"]];
    return view('about', compact(['title','contact']));
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
