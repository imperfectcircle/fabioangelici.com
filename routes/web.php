<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Middleware\CacheControl;
use Illuminate\Support\Facades\Route;

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'home')->name('public.home');
    Route::get('/about', 'about')->name('public.about');
    Route::get('/services', 'services')->name('public.services');
    Route::get('/portfolio', 'portfolio')->name('public.portfolio');
    Route::get('/blog', 'blog')->name('public.blog');
    Route::get('/blog/{slug}', 'articleShow')->name('public.article.show');
    Route::get('/contact', 'contact')->name('public.contact');

    Route::get('/portfolio/eliografica-varesina', 'eliografica')->name('public.portfolio.eliografica');
    Route::get('/portfolio/chiara-tessaro', 'chiara')->name('public.portfolio.chiara');
    Route::get('/portfolio/cilaver', 'cilaver')->name('public.portfolio.cilaver');
    Route::get('/portfolio/arte-e-preziosi', 'arte')->name('public.portfolio.oro');
    Route::get('/portfolio/remida-varese', 'remida')->name('public.portfolio.remida');
    Route::get('/portfolio/shop-teknofibra', 'shopTeknofibra')->name('public.portfolio.shop');
    Route::get('/portfolio/teknofibra', 'teknofibra')->name('public.portfolio.teknofibra');

    Route::post('/contact-services', 'contactServices')->name('public.contact.services');
    Route::post('/contact-generic' , 'contactGeneric')->name('public.contact.generic');
    Route::post('/contact-offers' , 'contactOffers')->name('public.contact.offers');
});

Route::post('/upload-image', ImageUploadController::class);

Route::controller(DashboardController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
    Route::resource('articles', ArticleController::class)->withoutMiddleware(CacheControl::class);;
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
