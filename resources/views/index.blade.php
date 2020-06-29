@extends('layouts.app')

@section('title', 'Listing')

@section('content')

<h1 class="mt-5 pb-4">Hello Bootstrap</h1>

@auth
<div class="dropdown mb-2">
<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Logged as admin</button>
<div class="dropdown-menu">
    <a class="dropdown-item" href="{{ url('new') }}">Add article</a>
    <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
</div>
</div>

<p class="pb-4">There are 100 posts</p>
@endauth

@foreach ($articles as $article)

<a href="{{ url('article', $article->id) }}">
<article class="mb-5 text-dark">
    <div class="media d-block d-md-flex">
    <img src="{{ asset('storage/' . $article->image) }}" class="mr-3"/>
    <div class="media-body">
        <h4 class="my-3">{{ $article->title }}</h4>
        <p>{{ $article->content }}</p>
    </div>
    </div>
</article>
</a>

@endforeach

<button type="button" class="btn btn-primary mt-3">Next page</button>

@endsection