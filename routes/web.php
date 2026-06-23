<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\PdfController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/services/{id}', [PageController::class, 'showService'])->name('frontend.services.show');

Route::get('/articles', [PageController::class, 'articles'])->name('articles');

Route::get('/articles/{id}', [PageController::class, 'showArticle'])->name('frontend.articles.show');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('login');

Route::post('/admin/login', [AuthController::class, 'login']);

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->middleware('admin.auth')
    ->name('admin.dashboard');


/*
|--------------------------------------------------------------------------
| PDF Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/services/pdf', [PdfController::class, 'services'])
    ->name('services.pdf');

/*
|--------------------------------------------------------------------------
| Admin CRUD Routes
|--------------------------------------------------------------------------
*/

Route::resource('/admin/services', ServiceController::class)
    ->middleware('admin.auth');

Route::resource('/admin/articles', ArticleController::class)
    ->middleware('admin.auth');

Route::resource('/admin/team', TeamController::class)
    ->middleware('admin.auth');
