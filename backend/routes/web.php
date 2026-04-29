<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedisTestController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;

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


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    });

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::resource('projects', AdminProjectController::class);
         Route::resource('blogs', AdminBlogController::class);
    });
});


// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('projects', AdminProjectController::class);
// });























