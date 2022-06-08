<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;


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


Route::get('wildcard/{id}', function ($id) {
    return response ('EndPoint' .  $id);      // Wildcard Endpoint 
});

Route::get('wildcards/{id}', function ($id) {
    return response ('EndPoint' .  $id);      // Route Constraints
})->where('id','[0-9]+');


Route::get('wildcardc/{id}', function ($id) {
    dd($id); // Die Dump helper 
    return response ('EndPoint' .  $id);      
});



Route::get('/search', function (Request $request) {
    dd($request); // Request Object http://127.0.0.1:8000/search?name=Ariful&city=Khulna
       
});

Route::get('/searchparam', function (Request $request) {
    dd($request->name . ' '.$request->city); // Request Query Parameters   
    
    /* ------- http://127.0.0.1:8000/searchparam?name=Ariful&city=Khulna */
       
});

Route::get('/returnparam', function (Request $request) {
    return $request->name . ' '.$request->city; // Return Request Query Parameters   
    
    /* ------- http://127.0.0.1:8000/returnparam?name=Ariful&city=Khulna */
       
});
