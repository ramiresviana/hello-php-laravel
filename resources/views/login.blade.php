@extends('layouts.app')

@section('title', 'Login')

@section('content')

<h1 class="my-5 pb-5 text-center">Hello Bootstrap</h1>

<div class="d-flex justify-content-md-center">
  <form class="col-md-8 col-lg-6 shadow-sm bg-light p-5" method="POST" action="{{ url('login') }}">

    @csrf

    <div class="form-group">
      <label>Username</label>
      <input class="form-control" name="email">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password">
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

@if (session('error'))
  <div class="alert alert-danger">{{ session('error') }}</div>
@endif

  </form>

</div>

@endsection