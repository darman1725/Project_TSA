<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk pegawai
Route::resource('pegawai', PegawaiController::class);