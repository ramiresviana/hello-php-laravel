@extends('layouts.app')

@section('title', 'Article')

@section('content')

<h1 class="my-5 pb-5">Hello Bootstrap</h1>
<img src="{{ asset('storage/' . $article->image) }}" class="w-100" />
<h2 class="mt-4 mb-3">{{ $article->title }}</h2>
<p>{{ $article->content }}</p>

@auth
<hr class="my-5">
<a href="{{ url('edit', $article->id) }}" class="btn btn-lg btn-primary">Edit</a>
<a href="{{ url('remove', $article->id) }}" class="btn btn-lg btn-danger">Remove</a>
@endauth

@endsection