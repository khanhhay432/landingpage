<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/dich-vu/{slug}', [ServiceController::class, 'show'])->name('service.show');
Route::get('/bai-viet/{slug}', [PostController::class, 'show'])->name('post.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth') -> group(function() {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', function () {return 'Users list'; })->name('users.index');
    Route::get('/users/create', function () {return 'Add user form'; })->name('users.create');
    route::get('/reports', function () {return 'Reports page'; })->name('reports.index');
});
