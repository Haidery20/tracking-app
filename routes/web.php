<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageViewController;
use App\Http\Controllers\Auth\PasswordResetController;
use Inertia\Inertia;

// Main Pages
Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/domain/search', function (Request $request) {
    $domain = $request->input('domain');
    
    // TODO: Implement domain availability check
    
    return view('domain.search-results', [
        'domain' => $domain
    ]);
})->name('domain.search');



Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/community', function () {
    return view('community');
})->name('community');

// Authentication Routes
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Password Reset Routes
Route::get('/password/reset', [PasswordResetController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [PasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [PasswordResetController::class, 'reset'])->name('password.update');

// Dashboard Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/staff/create', [DashboardController::class, 'createStaff'])->name('admin.staff.create');
    Route::delete('/user/{id}', [DashboardController::class, 'deleteUser'])->name('admin.user.delete');
    Route::patch('/user/{id}/status', [DashboardController::class, 'updateUserStatus'])->name('admin.user.status');
});

Route::get('/increment-views', [PageViewController::class, 'incrementHomepageViews']);
Route::get('/get-views', [PageViewController::class, 'getHomepageViews']);
