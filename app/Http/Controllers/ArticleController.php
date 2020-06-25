<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleFormRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

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

    public function edit()
    {
        return view('edit');
    }
}
