<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show()
    {
        return view('show');
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
