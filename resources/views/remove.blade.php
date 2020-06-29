@extends('layouts.app')

@section('title', 'Logout')

@section('content')

<h1 class="my-5 pb-5 text-center">Hello Bootstrap</h1>

<div class="d-flex justify-content-md-center">
  <form class="col-md-8 col-lg-6 shadow-sm bg-light p-5" method="POST" action="{{ url('remove', $article->id) }}">

    @csrf

    <p>You want to remove this article?</p>
    <button type="submit" class="btn btn-block btn-lg btn-primary mt-5">Remove</button>

  </form>

</div>

@endsection