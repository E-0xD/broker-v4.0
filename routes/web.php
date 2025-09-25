<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'frontend.welcome')->name('home');
Route::view('about', 'frontend.about')->name('about');
Route::view('contact', 'frontend.contact')->name('contact');
Route::view('privacy-policy', 'frontend.privacy-policy')->name('privacy');
Route::get('pricing', [PageController::class, 'pricing'])->name('pricing');
Route::view('terms', 'frontend.terms')->name('terms');
Route::view('faq', 'frontend.faq')->name('faq');


require __DIR__ . '/user.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/master.php';


Route::fallback(fn() => view('frontend.404'));
