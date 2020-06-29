<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleApiController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function store(ArticleFormRequest $request)
    {
        $attr = $request->only('title', 'content');
        $attr['image'] = $request->file('image')->store('images', 'public');

        Article::create($attr);

        return 'article_created';
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function update(Article $article, ArticleFormRequest $request)
    {
        $attr = $request->only('title', 'content');
        $attr['image'] = $request->file('image')->store('images', 'public');

        Storage::disk('public')->delete($article->image);

        $article->update($attr);

        return 'article_updated';
    }

    public function destroy(Article $article)
    {
        Storage::disk('public')->delete($article->image);
        $article->delete();

        return 'article_removed';
    }
}
