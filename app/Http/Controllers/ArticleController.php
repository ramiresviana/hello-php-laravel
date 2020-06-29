<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleFormRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->simplePaginate(5);

        return view('index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('show', compact('article'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(ArticleFormRequest $request)
    {
        $attr = $request->only('title', 'content');
        $attr['image'] = $request->file('image')->store('images', 'public');

        Article::create($attr);

        return redirect('new')->with('status', 'Article created');
    }

    public function edit(Article $article)
    {
        return view('edit', compact('article'));
    }

    public function update(ArticleFormRequest $request, Article $article)
    {
        $attr = $request->only('title', 'content');
        $attr['image'] = $request->file('image')->store('images', 'public');

        Storage::disk('public')->delete($article->image);

        $article->update($attr);

        return redirect('edit/' . $article->id)->with('status', 'Article updated');
    }

    public function showRemove(Article $article)
    {
        return view('remove', compact('article'));
    }

    public function remove(Article $article)
    {
        Storage::disk('public')->delete($article->image);
        $article->delete();

        return redirect('/');
    }
}
