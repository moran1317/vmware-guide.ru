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
//Route::get('/home',[\App\Http\Controllers\SiteController::class, 'page_home']);
Route::get('/about',[\App\Http\Controllers\SiteController::class, 'page_adout']);
Route::get('/login', [\App\Http\Controllers\SiteController::class, 'loginForm']);
Route::post('/login', [\App\Http\Controllers\SiteController::class, 'login'])->name('login');

//Route::get('/admin',[\App\Http\Controllers\AdminController::class, 'page_index']);
//Route::get('/admin/posts',[\App\Http\Controllers\AdminController::class, 'page_posts']);
//Route::get('/admin/users',[\App\Http\Controllers\AdminController::class, 'page_users']);

Route::get('/register', [\App\Http\Controllers\SiteController::class, 'registerForm']);
Route::post('/register', [\App\Http\Controllers\SiteController::class, 'register'])->name('register');

//Route::get('/logout', [\App\Http\Controllers\SiteController::class, 'logout'])->name('logout');;

Route::middleware('auth')->group(function () {
    Route::get('/home', [\App\Http\Controllers\SiteController::class, 'page_home']);
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'page_index']);
    Route::get('/logout', [\App\Http\Controllers\SiteController::class, 'logout'])->name('logout');
    Route::get('/admin/posts',[\App\Http\Controllers\AdminController::class, 'page_posts']);
    Route::get('/admin/users',[\App\Http\Controllers\AdminController::class, 'page_users']);
});
