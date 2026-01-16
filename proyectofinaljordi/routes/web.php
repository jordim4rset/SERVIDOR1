<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

//INDEX
Route::get('/', function () {
    return view('index');
})->name('index');

//SHOP
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

//DONDE ESTAMOS
Route::get('/dondeEstamos', function(){
    return view('whereAreWe');
})->name('whereAreWe');

//LEGAL
Route::get('privacyPolice',[LegalController::class, 'privacyPolice'])->name('privacyPolice');
Route::get('termsCondition',[LegalController::class, 'termsCondition'])->name('termsCondition');

//PLAYERS
Route::resource('players', PlayerController::class)
    ->only(['create','store','edit','update','destroy'])
    ->middleware('isAdmin');

//EVENTOS
Route::resource('events', EventController::class)
    ->only(['create','store','edit','update','destroy'])
    ->middleware('isAdmin');

//MESAJES
Route::resource('messages', MessageController::class)
    ->only(['create','store','edit','update','destroy'])
    ->middleware('isAdmin');

//LOGINS
Route::get('singup', [LoginController::class, 'singupForm'])->name('singupForm');
Route::post('singup', [LoginController::class, 'singup'])->name('singup');
Route::get('login', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('UserAcount', [UserController::class, 'account'])->name('users.account');
