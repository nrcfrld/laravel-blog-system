<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/about', [AboutController::class, 'index'])->name('about');



// Post Routes
Route::get('/admin/create-post', [PostController::class, 'create']);
Route::post('/admin/create-post', [PostController::class, 'store']);
Route::get('/admin/posts', [PostController::class, 'index']);
Route::get('/admin/posts/{post}', [PostController::class, 'edit']);
Route::patch('/admin/posts/{post}', [PostController::class, 'update']);
Route::delete("/admin/posts/{post}/delete", [PostController::class, 'destroy']);
