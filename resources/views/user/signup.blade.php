@extends('layout.master')
@section('title')
    User SignUp
@endsection
@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <h1>Sign Up</h1>
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
        <p></p>
      </div>
    @endif
    <form action="{{ route('user.signup') }}" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" class="form-control" type="email" name="email" required placeholder="Enter your email address">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input id="password" class="form-control" type="password" name="password" required placeholder="Enter your password">
      </div>
      <button type="submit" class="btn btn-success">Sign Up</button>
      {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection