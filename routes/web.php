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
    return view('auth');
});

Route::get("/search", function () {
    return view("search");
});

Route::get("/pet", function () {
    return view("pet");
});

Route::get("/directory", function () {
    return view("directory");
});

Route::get("/request", function () {
    return view("request");
});
