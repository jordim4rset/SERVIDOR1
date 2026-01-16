<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;


Route::get('/', IndexController::class)->name('index');

Route::get('singup', [LoginController::class, 'singupForm'])->name('singupForm');
Route::post('singup', [LoginController::class, 'singup'])->name('singup');
Route::get('login', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('', [UserController::class, 'account'])->name('users.account');
