<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedisTestController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\PortfolioContentController;
use App\Http\Controllers\Admin\AdminDashboardController;

// Redis routes for testing or dynamic data
Route::prefix('redis')->group(function () {
    Route::get('/set/{type}/{id}', [RedisTestController::class, 'setData']);
    Route::get('/set-dynamic/{type}/{id}', [RedisTestController::class, 'setDynamicData']);
    Route::get('/get/{type}/{id}', [RedisTestController::class, 'getData']);
    Route::get('/type/{type}/{id}', [RedisTestController::class, 'getKeyType']);
});

// Admin routes with authentication
Route::prefix('admin')->name('admin.')->group(function () {

    // Routes for guest users (login)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    });

    // Routes for authenticated users
    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        // Explicit routes for Projects
        Route::get('projects', [AdminProjectController::class, 'index'])->name('projects.index');
        Route::get('projects/create', [AdminProjectController::class, 'create'])->name('projects.create');
        Route::post('projects', [AdminProjectController::class, 'store'])->name('projects.store');
        Route::get('projects/{project}', [AdminProjectController::class, 'show'])->name('projects.show');
        Route::get('projects/{project}/edit', [AdminProjectController::class, 'edit'])->name('projects.edit');
        Route::put('projects/{project}', [AdminProjectController::class, 'update'])->name('projects.update');
        Route::delete('projects/{project}', [AdminProjectController::class, 'destroy'])->name('projects.destroy');

        // Explicit routes for Blogs
        Route::get('blogs', [AdminBlogController::class, 'index'])->name('blogs.index');
        Route::get('blogs/create', [AdminBlogController::class, 'create'])->name('blogs.create');
        Route::post('blogs', [AdminBlogController::class, 'store'])->name('blogs.store');
        Route::get('blogs/{blog}', [AdminBlogController::class, 'show'])->name('blogs.show');
        Route::get('blogs/{blog}/edit', [AdminBlogController::class, 'edit'])->name('blogs.edit');
        Route::put('blogs/{blog}', [AdminBlogController::class, 'update'])->name('blogs.update');
        Route::delete('blogs/{blog}', [AdminBlogController::class, 'destroy'])->name('blogs.destroy');

        // Explicit routes for Portfolio Content
        Route::get('portfolio_content', [PortfolioContentController::class, 'index'])->name('portfolio_content.index');
        Route::get('portfolio_content/create', [PortfolioContentController::class, 'create'])->name('portfolio_content.create');
        Route::post('portfolio_content', [PortfolioContentController::class, 'store'])->name('portfolio_content.store');
        Route::get('portfolio_content/{portfolio_content}', [PortfolioContentController::class, 'show'])->name('portfolio_content.show');
        Route::get('portfolio_content/{portfolio_content}/edit', [PortfolioContentController::class, 'edit'])->name('portfolio_content.edit');
        Route::put('portfolio_content/{portfolio_content}', [PortfolioContentController::class, 'update'])->name('portfolio_content.update');
        Route::delete('portfolio_content/{portfolio_content}', [PortfolioContentController::class, 'destroy'])->name('portfolio_content.destroy');
    });
});