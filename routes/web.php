<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/features', [FeaturesController::class, 'index'])->name('features');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Authentication Routes
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Dashboard Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/staff/create', [DashboardController::class, 'createStaff'])->name('admin.staff.create');
    Route::delete('/user/{id}', [DashboardController::class, 'deleteUser'])->name('admin.user.delete');
    Route::patch('/user/{id}/status', [DashboardController::class, 'updateUserStatus'])->name('admin.user.status');
});
