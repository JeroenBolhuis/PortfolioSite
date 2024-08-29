<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/submit', [HomeController::class, 'submit'])->name('submit');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/preview-email', function () {
    return view('emails.contact');
});

Route::match(['get', 'post'], '/setLocale', function (Request $request) {
    $locale = $request->input('locale');
    if (in_array($locale, ['en', 'nl'])) {
        Session::put('locale', $locale);
    }
    return back();
})->name('setLocale');