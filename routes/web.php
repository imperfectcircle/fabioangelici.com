<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'home')->name('public.home');
    Route::get('/about', 'about')->name('public.about');
    Route::get('/services', 'services')->name('public.services');
    Route::get('/portfolio', 'portfolio')->name('public.portfolio');
    Route::get('/blog', 'blog')->name('public.blog');
    Route::get('/contact', 'contact')->name('public.contact');
});

Route::controller(DashboardController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
