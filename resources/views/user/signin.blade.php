@extends('layout.master')
@section('title')
    User SignIn
@endsection
@section('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1>Sign In</h1>
      <form action="{{ route('user.signin') }}" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" class="form-control" type="email" name="email" required placeholder="Enter your email address">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input id="password" class="form-control" type="password" name="password" required placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-success">Sign In</button>
        {{ csrf_field() }}
      </form>
    </div>
  </div>
@endsection