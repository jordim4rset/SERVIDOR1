<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/**
 * ruta para productos
 */
Route::resource('/product', ProductController::class);
