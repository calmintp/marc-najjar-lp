<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/books', [PageController::class, 'books'])->name('books');
Route::get('/videos', [PageController::class, 'videos'])->name('videos');

// booking form page & submit
Route::get('/book-marc', [PageController::class, 'book'])->name('book');
Route::post('/book-marc', [PageController::class, 'bookSubmit'])->name('book.submit');

// free mindset guide lead
Route::post('/free-guide', [PageController::class, 'freeGuideSubmit'])->name('free-guide.submit');
