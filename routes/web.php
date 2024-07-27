<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/submit', [HomeController::class, 'submit'])->name('submit');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/preview-email', function () {
    return view('emails.contact');
});
