<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function() {
    return redirect('/chi-sono', 301);
});

Route::get('/services', function() {
    return redirect('/servizi', 301);
});

Route::get('/contacts', function() {
    return redirect('/contatti', 301);
});

Route::get('/web-sites', function() {
    return redirect('/realizzazione-siti-internet', 301);
});

Route::get('/management', function() {
    return redirect('/gestionali-web', 301);
});

Route::get('/ecommerce', function() {
    return redirect('/realizzazione-portali-ecommerce', 301);
});