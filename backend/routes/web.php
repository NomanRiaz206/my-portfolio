<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedisTestController;

Route::prefix('redis')->group(function () {

    // Store / Update data
    Route::get('/set/{type}/{id}', [RedisTestController::class, 'setData']);

    // Store dynamic data via query params
    Route::get('/set-dynamic/{type}/{id}', [RedisTestController::class, 'setDynamicData']);

    // Fetch data
    Route::get('/get/{type}/{id}', [RedisTestController::class, 'getData']);

    // Check Redis key type
    Route::get('/type/{type}/{id}', [RedisTestController::class, 'getKeyType']);
});


Route::get('/test', function () {
    return 'Laravel is working';
});
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/portfolio', 'pages.portfolio.index')->name('portfolio.index');
Route::view('/portfolio/project-one', 'pages.portfolio.show')->name('portfolio.show');
Route::view('/reviews', 'pages.reviews')->name('reviews');
Route::view('/contact', 'pages.contact')->name('contact');
