@extends('layouts.main')

@section('content')
  <div class="content">
    <h1>Products</h1>
    @foreach ($products as $product)
      <section>
        <h2>{{ $product->name }}</h2>
        <p>ID: {{ $product->id }}</p>
        <p>by {{ $product->brand }}</p>
        <p>{{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p>
        <p>Rating: {{ $product->rating }}/5</p>
      </section>
    @endforeach
  </div>
@stop
