<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/books', [PageController::class, 'books'])->name('books');
Route::get('/videos', [PageController::class, 'videos'])->name('videos');
