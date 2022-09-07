<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SockController;

// Menambahkan Routing
Route::get('/index', [App\Http\Controllers\SockController::class, 'index']);
Route::get('/about', [App\Http\Controllers\SockController::class, 'about']);
Route::get('/testmonial', [App\Http\Controllers\SockController::class, 'testmonial']);
Route::get('/clients', [App\Http\Controllers\SockController::class, 'shop']);
Route::get('/contact', [App\Http\Controllers\SockController::class, 'contact']);

