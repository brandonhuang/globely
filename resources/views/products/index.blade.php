@extends('layouts.main')

@section('content')
  <section>
    <div class="content">
      <h1>Products</h1>
    </div>
  </section>
    <section>
      <div class="product">
        <h2 class="product-title">Product 1</h2>
        <p class="product-image">IMAGE GOES HERE</p>
        <p class="product-brand">by Jack</p>
        <p class="product-desc">a cool product</p>
        <p class="product-price">$100 <span>Rating: 5/5</span></p>
        <p class="product-rating">Rating: 5/5</p>
      </div>
    </section>

  @foreach ($products as $product)
    <section>
      <div class="product">
        <h2>{{ $product->name }}</h2>
        <p>ID: {{ $product->id }}</p>
        <p>by {{ $product->brand }}</p>
        <p>{{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p>
        <p>Rating: {{ $product->rating }}/5</p>
      </div>
    </section>
  @endforeach
@stop
