<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'frontend.welcome')->name('home');
Route::view('about', 'frontend.about')->name('about');
Route::view('contact', 'frontend.contact')->name('contact');
Route::view('privacy-policy', 'frontend.privacy-policy')->name('privacy');
Route::view('pricing', 'frontend.pricing')->name('pricing');
Route::view('terms', 'frontend.terms')->name('terms');
Route::view('faq', 'frontend.faq')->name('faq');


require __DIR__ . '/user.php';
require __DIR__ . '/auth.php';


Route::fallback(fn() => view('frontend.404'));
