<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('login',[AuthController::class,'authenticate'])->name('authenticate');

Route::get('register',[AuthController::class,'register'])->name('register.view');
Route::post('register',[AuthController::class,'registerprocess'])->name('register.submit');

Route::get('dashboard',[AuthController::class,'register'])->name('dashboard');
  