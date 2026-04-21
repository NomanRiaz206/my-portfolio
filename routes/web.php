<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return 'Laravel is working';
});
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/portfolio', 'pages.portfolio.index')->name('portfolio.index');
Route::view('/portfolio/project-one', 'pages.portfolio.show')->name('portfolio.show');
Route::view('/reviews', 'pages.reviews')->name('reviews');
Route::view('/contact', 'pages.contact')->name('contact');
