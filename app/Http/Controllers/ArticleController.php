<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show ($slug) {
        $article = Article::where('slug', $slug)->first();
        return view('articles.show', compact('article'));
    }
}
