<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/apollo/user', function (Request $request) {
    return $request->user();
});

//Route::get('/post', [\App\Http\Controllers\PostController::class, 'index']);

Route::get('/apollo/post', [PostController::class, 'index']); //Вывод всех постов
Route::get('/apollo/post/{post}', [PostController::class, 'show']); //Вывод одного поста
Route::post('/apollo/post', [PostController::class, 'store']); //Создание поста
Route::patch('/apollo/post/{post}', [PostController::class, 'update']); // Редактирование поста
Route::delete('/apollo/post/{post}', [PostController::class, 'destroy']); //Удаление поста
Route::get('/apollo/author/{author}/posts', [PostController::class, 'posts']); //вывод постов определенного автора
Route::get('/apollo/post/{post}/author', [PostController::class, 'author']); //вывод автора определенного поста

Route::resource('category', \App\Http\Controllers\CategoryController::class);

