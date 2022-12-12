<?php

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
    Route::get('/about', 'about')->name('public.about')->middleware(ProtectAgainstSpam::class);
    Route::get('/services', 'services')->name('public.services')->middleware(ProtectAgainstSpam::class);
    Route::get('/blog', 'blog')->name('public.blog');
    Route::get('/contacts', 'contacts')->name('public.contacts')->middleware(ProtectAgainstSpam::class);
});
