@extends('layouts.main')

@section('content')
  <section>
    <div class="content">
      <h1>Products</h1>
    </div>
  </section>
  @foreach ($products as $product)
    <section>
      <div class="content">
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
