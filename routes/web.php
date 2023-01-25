<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'home')->name('public.home');
    Route::get('/about', 'about')->name('public.about');
    Route::get('/services', 'services')->name('public.services');
    Route::get('/blog', 'blog')->name('public.blog');
    Route::get('/contacts', 'contacts')->name('public.contacts');
    Route::get('/web-sites', 'webSites')->name('public.websites');
    Route::get('/ecommerce', 'ecommerce')->name('public.ecommerce');
    Route::get('/management', 'management')->name('public.management');
    Route::get('/restyling', 'restyling')->name('public.restyling');
    Route::get('/hosting', 'hosting')->name('public.hosting');
    Route::post('/contact/submit', 'contactSubmit')->name('public.form')->middleware(ProtectAgainstSpam::class);
    Route::get('/thank-you/{name}', 'thanks')->name('public.thanks');
});

Route::controller(ArticleController::class)->group(function () {
    Route::get('/article/{slug}', 'show')->name('article.show');
});
