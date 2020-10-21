@extends('layout.master')
@section('title')
  Laravel Shopping Cart
@endsection
@section('content')
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <h1>Checkout</h1>
      <h4>Your Total : @currency($total)</h4>
      <form action="{{ route('checkout') }}" method="post">
      </form>
    </div>
  </div>
@endsection