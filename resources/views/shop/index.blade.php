@extends('layout.master')
@section('title')
    Laravel Shopping Cart
@endsection
@section('content')
  @foreach ($products->chunk(4) as $productChunk)
    <div class="row">
      @foreach ($productChunk as $product)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
              <img src="{{ $product->imagePath }}" alt="...">
              <div class="caption">
                <h3>{{ $product->title }}</h3>
                <p class="description">{{ $product->description }}</p>
                <div class="clearfix">
                  <div class="pull-left price">@currency($product->price)</div>
                  <p><a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a></p>
                </div>
              </div>
            </div>
        </div>
      @endforeach
    </div>
  @endforeach
@endsection