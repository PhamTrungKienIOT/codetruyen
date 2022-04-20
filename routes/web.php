<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TruyenController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/danhmuc', DanhmucController::class);
Route::resource('/truyen', TruyenController::class);
