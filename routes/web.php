<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/privacy', 'privacy')->name('privacy');
Route::post('/contact', [ContactController::class, 'submit'])
    ->middleware('contact.throttle')
    ->name('contact.submit');

Route::post('/setLocale', function (Request $request) {
    $locale = $request->input('locale');
    if (in_array($locale, ['en', 'nl'], true)) {
        Session::put('locale', $locale);
    }

    return back();
})->name('setLocale');
