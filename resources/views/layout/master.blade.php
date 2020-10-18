<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap-theme.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/app.css')}}">
  @yield('styles')
</head>
<body>
  @include('partials.header')
  <div class="container">
    @yield('content')
  </div>
  
  <script src="{{URL::asset('vendor/jquery/jquery-1.12.3.min.js')}}"></script>
  <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  @yield('scripts')
</body>
</html>