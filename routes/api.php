<?php

use App\Http\Controllers\api\PostController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/post', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('/post', [PostController::class, 'index']); //Вывод всех гайдов
Route::get('/post/{post}', [PostController::class, 'show']); //Вывод одного гайда
Route::post('/post', [PostController::class, 'store']); //Создание гайда
Route::patch('/post/{post}', [PostController::class, 'update']); // Редактирование гайда
Route::delete('/post/{post}', [PostController::class, 'destroy']); //Удаление гайда
Route::get('/author/{author}/posts', [PostController::class, 'posts']); //вывод гайдов определенного автора
Route::get('/post/{post}/author', [PostController::class, 'author']); //вывод автора определенного гайда
Route::resource('category', \App\Http\Controllers\api\CategoryController::class);






