@extends('layouts.app')

@section('title', 'Article')

@section('content')

<h1 class="my-5 pb-5">Hello Bootstrap</h1>
<img src="{{ url($article->image) }}" class="w-100" />
<h2 class="mt-4 mb-3">{{ $article->title }}</h2>
<p>{{ $article->content }}</p>
<hr class="my-5">
<button type="button" class="btn btn-lg btn-primary">Edit</button>
<button type="button" class="btn btn-lg btn-danger">Remove</button>

@endsection