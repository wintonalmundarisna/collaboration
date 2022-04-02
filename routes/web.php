<?php

use App\Http\Controllers\BuatQuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\QuottimeController;


Route::get('/', function () {
    return view('index');
})->middleware('guest');


Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'daftar']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/sambutan', function () {
    return view('sambutan');
})->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/quottime', [QuottimeController::class, 'user'])->middleware('auth');

Route::get('/quotes', [QuottimeController::class, 'quotes'])->middleware('auth');

Route::get('/buat-quote', [QuotesController::class, 'create'])->middleware('auth');


Route::resource('/mypost/quottime', QuotesController::class)->middleware('auth');

// Route::resource('/edit-quote', [QuotesController::class, 'halEdit'])->middleware('auth');

Route::get('/lupa-password', function () {
    return view('lupa-password');
})->middleware('guest');