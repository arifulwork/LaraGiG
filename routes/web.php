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
    return view('welcome');
});

Route::get('/route', function () {
    return ("Hello World");   // routing
});

Route::get('/response', function () {
    return response ("Hello World", 200)
    ->header('Content-Type', 'text/plain')
    ->header('Ariful', 'Islam'); // response
});
