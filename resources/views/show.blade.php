@extends('layouts.app')

@section('title', 'Article')

@section('content')

<h1 class="my-5 pb-5">Hello Bootstrap</h1>
<img src="img.jpg" class="w-100" />
<h2 class="mt-4 mb-3">Vivamus euismod a tellus eget interdum. Aenean ac.</h2>
<p>Aliquam vulputate mi in vulputate aliquam. Mauris ultrices vel felis eget tempus. Morbi a est at lacus malesuada ultrices ac quis turpis. Curabitur ante metus, malesuada eget neque eu, ornare suscipit ligula. Aliquam suscipit cursus eros, ut tincidunt nulla laoreet a. Donec aliquam urna vel pellentesque sodales.</p>
<hr class="my-5">
<button type="button" class="btn btn-lg btn-primary">Edit</button>
<button type="button" class="btn btn-lg btn-danger">Remove</button>

@endsection