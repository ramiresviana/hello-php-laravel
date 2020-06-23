<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

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

    public function edit()
    {
        return view('edit');
    }
}
