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

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/hello', 'App\Http\Controllers\WelcomeController@hello');

Route::get('/', function() {
    return 'Selamat Datang';
});

Route::get('/about', function() {
    return 'Nama : Darman Saputra Saragih <br> NIM : 1941720060 <br> Kelas : 4 TI-I';
});

Route::get('/articles/{id}', function($id) {
    return 'Halaman Artikel dengan id '.$id;
});

