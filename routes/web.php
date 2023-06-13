<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LandingController;
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
    Route::get('/come-lavoro', 'method')->name('public.method');
    Route::get('/chi-sono', 'about')->name('public.about');
    Route::get('/servizi', 'services')->name('public.services');
    Route::get('/portfolio', 'portfolio')->name('public.portfolio');
    Route::get('/portfolio/eliografica-varesina', 'eliografica')->name('public.eliografica');
    Route::get('/portfolio/meridiane-varese', 'meridiane')->name('public.meridiane');
    Route::get('/portfolio/cilaver', 'cilaver')->name('public.cilaver');
    Route::get('/portfolio/chiara-tessaro', 'chiara')->name('public.chiaratessaro');
    Route::get('/portfolio/teknofibra', 'teknofibra')->name('public.teknofibra');
    Route::get('/portfolio/climassistance', 'clima')->name('public.climassistance');
    Route::get('/blog', 'blog')->name('public.blog');
    Route::get('/contatti', 'contacts')->name('public.contacts');
    Route::get('/realizzazione-siti-internet', 'webSites')->name('public.websites');
    Route::get('/realizzazione-portali-ecommerce', 'ecommerce')->name('public.ecommerce');
    Route::get('/gestionali-web', 'management')->name('public.management');
    Route::get('/restyling', 'restyling')->name('public.restyling');
    Route::get('/hosting', 'hosting')->name('public.hosting');
    Route::post('/contact/submit', 'contactSubmit')->name('public.form')->middleware(ProtectAgainstSpam::class);
    Route::get('/thank-you/{name}', 'thanks')->name('public.thanks');
});

Route::controller(LandingController::class)->group(function() {
    Route::get('/creazione-siti-web-gallarate', 'gallarate')->name('landing.gallarate')->middleware(ProtectAgainstSpam::class);
    Route::get('/creazione-siti-web-malnate', 'malnate')->name('landing.malnate')->middleware(ProtectAgainstSpam::class);
});

Route::controller(ArticleController::class)->group(function () {
    Route::get('/article/{slug}', 'show')->name('article.show');
});
