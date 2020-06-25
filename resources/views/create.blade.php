@extends('layouts.app')

@section('title', 'New')

@section('content')

<h1 class="my-5 pb-5">Hello Bootstrap</h1>

<form class="shadow-sm bg-light p-5" method="POST" enctype="multipart/form-data" action="{{ url('new') }}">

  @csrf

  <div class="form-group">
    <label>Title</label>
    <input class="form-control" name="title" value="{{ old('title') }}">
  </div>
  <div class="form-group">
    <label>Content</label>
    <textarea rows="6" class="form-control" name="content">{{ old('content') }}</textarea>
  </div>
  <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control-file" name="image">
  </div>
  <button type="submit" class="btn btn-block btn-lg btn-primary mt-5">Submit</button>
  <br>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
@foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
@endforeach
    </ul>
  </div>
@endif

@if (session('status'))
  <div class="alert alert-success">{{ session('status') }}</div>
@endif

</form>

@endsection