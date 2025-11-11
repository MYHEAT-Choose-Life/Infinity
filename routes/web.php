<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

Route::view('/', 'index');
Route::get('/articlelist', [PostController::class, 'index'])->name('articlelist');
Route::get('/article/{slug}', [PostController::class, 'show'])->name('article');
Route::post('/contact', [ContactController::class, 'send'])->name('contact');

