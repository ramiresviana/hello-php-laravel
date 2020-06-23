@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<h1 class="my-5 pb-5">Hello Bootstrap</h1>

<form class="shadow-sm bg-light p-5">
  <div class="form-group">
    <label>Title</label>
    <input class="form-control">
  </div>
  <div class="form-group">
    <label>Content</label>
    <textarea rows="6" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control-file">
  </div>
  <button type="submit" class="btn btn-block btn-lg btn-primary mt-5">Submit</button>
</form>

@endsection