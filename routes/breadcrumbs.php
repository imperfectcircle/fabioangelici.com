<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Article;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('public.home'));
});

// Home > About
Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Chi sono', route('public.about'));
});

// Home > Services
Breadcrumbs::for('services', function(BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Servizi', route('public.services'));
});

// Home > Websites
Breadcrumbs::for('websites', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Siti Web', route('public.websites'));
});

// Home > Ecommerce
Breadcrumbs::for('ecommerce', function(BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Ecommerce', route('public.ecommerce'));
});

// Home > Gestionali
Breadcrumbs::for('gestionali', function(BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Gestionali', route('public.management'));
});

// Home > Restyling
Breadcrumbs::for('restyling', function(BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Restyling siti', route('public.restyling'));
});

// Home > Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Blog', route('public.blog'));
});

// Home > Blog > Article
Breadcrumbs::for('article', function(BreadcrumbTrail $trail, Article $article) {
    $trail->parent('blog');
    $trail->push($article->title, route('article.show', $article));
});

// Home > Blog > [Category]
//Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//    $trail->parent('blog');
//    $trail->push($category->title, route('category', $category));
//});