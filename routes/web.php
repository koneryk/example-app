<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class,'index'])->name('home');

Route::get('/about', [BasicController::class,'about'])->name('about');

Route::get('/contact', [BasicController::class,'contact'])->name('contact');

Route::post('/contact', [BasicController::class,'submit'])->name('contact.post');

Route::get('/posts', [PostController::class,'index'])->name('posts');

Route::get('/posts/{id}', [PostController::class,'show'])->name('posts.one');

Route::get('/posts/{id}/edit', [PostController::class,'edit'])->name('posts.one.edit');
Route::post('/posts/{id}/edit', [PostController::class,'update'])->name('posts.edit');
Route::post('/posts/{id}/delete', [PostController::class,'delete'])->name('posts.one.delete');



