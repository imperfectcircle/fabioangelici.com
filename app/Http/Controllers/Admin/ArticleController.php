<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::paginate(10);

        return inertia('Admin/Articles/Index', ['articles' => ArticleResource::collection($articles)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Admin/Articles/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $req)
    {
        $data = $req->validated();
        $article = new Article(Arr::except($data, ['slug', 'author']));

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $path = $image->store('upload');
            $article->image_url = Storage::url($path);
        }

        $article->slug = Str::slug($data['title'], '-');
        $article->author = Auth::user()->name;

        $article->save();

        return to_route('articles.index')->with('message', 'Articolo creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return inertia('Admin/Articles/Edit', ['article' => new ArticleResource($article)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $req, Article $article)
    {
        $data = $req->validated();
        $article->fill(Arr::except($data, ['slug', 'author']));
        $article->slug = Str::slug($data['title'], '-');
        $article->author = Auth::user()->name;

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $path = $image->store('upload');
            $article->image_url = Storage::url($path);
        }

        $article->save();

        return to_route('articles.index')->with('message', 'Articolo Aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return to_route('articles.index')->with('message', 'Articolo eliminato con successo!');
    }
}
