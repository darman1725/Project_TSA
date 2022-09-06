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

/*Route::get('/', function () {
    return view('welcome');
});*/

// Konsep Controller 
// Route::get('/', 'App\Http\Controllers\PageController@index');
// Route::get('/about', 'App\Http\Controllers\PageController@about');
// Route::get('/articles/{id}', 'App\Http\Controllers\PageController@articles');

// Single Action Controller 
Route::get('/', 'App\Http\Controllers\HomeController@ucapan');
Route::get('/about', 'App\Http\Controllers\AboutController@about');
Route::get('/articles/{id}', 'App\Http\Controllers\ArticleController@articles');
