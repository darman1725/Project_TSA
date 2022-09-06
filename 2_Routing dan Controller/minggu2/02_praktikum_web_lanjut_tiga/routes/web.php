<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\ContactUsController;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('products')->group(function() {
   Route::get('/eduGames',[ProductsController::class, 'eduGames']);
   Route::get('/kidsGames', [ProductsController::class, 'kidsGames']);
   Route::get('/storyBooks', [ProductsController::class, 'storyBooks']);
   Route::get('/kidsSongs', [ProductsController::class, 'kidsSongs']);
});

Route::get('/news/{berita}', function($berita) {
    echo '<center>Click To Read Latest News About
    <br><a href="https://www.educastudio.com/news">'.$berita.'</a>
    <br>People Also Read
    <br><a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">Latest Update About COVID19</a>';
});

Route::prefix('programs')->group(function() {
    Route::get('/karir',[ProgramsController::class, 'karir']);
    Route::get('/magang',[ProgramsController::class, 'magang']);
    Route::get('/kunjunganIndustri',[ProgramsController::class, 'kunjunganIndustri']);
});

Route::get('/aboutUs', function() {
    echo '<center>About Us
    <br><a href="https://www.educastudio.com/about-us">Click To Get The Link</a>';
});

Route::resource('contact', ContactUsController::class)->only(['index']);

   


