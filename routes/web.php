<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[\App\Http\Controllers\SiteController::class, 'page_index']);
Route::get('/home',[\App\Http\Controllers\SiteController::class, 'page_home']);
Route::get('/about',[\App\Http\Controllers\SiteController::class, 'page_adout']);

Route::get('/admin',[\App\Http\Controllers\AdminController::class, 'page_index']);
