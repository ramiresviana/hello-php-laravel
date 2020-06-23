@extends('layouts.app')

@section('title', 'Listing')

@section('content')

<h1 class="mt-5 pb-4">Hello Bootstrap</h1>

<div class="dropdown mb-2">
<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Logged as admin</button>
<div class="dropdown-menu">
    <a class="dropdown-item" href="#">Add article</a>
    <a class="dropdown-item" href="#">Logout</a>
</div>
</div>

<p class="pb-4">There are 100 posts</p>

<a href="#">
<article class="mb-5 text-dark">
    <div class="media d-block d-md-flex">
    <img src="img.jpg" class="mr-3"/>
    <div class="media-body">
        <h4 class="my-3">Vivamus euismod a tellus eget interdum. Aenean ac.</h4>
        <p>Aliquam vulputate mi in vulputate aliquam. Mauris ultrices vel felis eget tempus. Morbi a est at lacus malesuada ultrices ac quis turpis. Curabitur ante metus, malesuada eget neque eu, ornare suscipit ligula. Aliquam suscipit cursus eros, ut tincidunt nulla laoreet a. Donec aliquam urna vel pellentesque sodales.</p>
    </div>
    </div>
</article>
</a>

<a href="#">
<article class="mb-5 text-dark">
    <div class="media d-block d-md-flex">
    <img src="img.jpg" class="mr-3"/>
    <div class="media-body">
        <h4 class="my-3">Vivamus euismod a tellus eget interdum. Aenean ac.</h4>
        <p>Aliquam vulputate mi in vulputate aliquam. Mauris ultrices vel felis eget tempus. Morbi a est at lacus malesuada ultrices ac quis turpis. Curabitur ante metus, malesuada eget neque eu, ornare suscipit ligula. Aliquam suscipit cursus eros, ut tincidunt nulla laoreet a. Donec aliquam urna vel pellentesque sodales.</p>
    </div>
    </div>
</article>
</a>

<a href="#">
<article class="mb-5 text-dark">
    <div class="media d-block d-md-flex">
    <img src="img.jpg" class="mr-3"/>
    <div class="media-body">
        <h4 class="my-3">Vivamus euismod a tellus eget interdum. Aenean ac.</h4>
        <p>Aliquam vulputate mi in vulputate aliquam. Mauris ultrices vel felis eget tempus. Morbi a est at lacus malesuada ultrices ac quis turpis. Curabitur ante metus, malesuada eget neque eu, ornare suscipit ligula. Aliquam suscipit cursus eros, ut tincidunt nulla laoreet a. Donec aliquam urna vel pellentesque sodales.</p>
    </div>
    </div>
</article>
</a>

<button type="button" class="btn btn-primary mt-3">Next page</button>

@endsection