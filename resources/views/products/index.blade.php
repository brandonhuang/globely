@extends('layouts.main')

@section('content')
  <section>
    <div class="content">
      <h1>Products</h1>
    </div>
  </section>
    <section>
     <div class="card col-md-3">
        <div class="row">
          <div class="col-md-6">
            <img class="product-image" src="http://mikemoir.com/mikemoir/wp-content/uploads/2015/06/MedRes_Product-presentation-2.jpg">
          </div>
          <div class="col-md-6">
            <h2 class="product-title">Product 1</h2>
            <p class="product-brand">by Jack</p>
            <p class="product-desc">a cool product</p>
            <p class="product-price">$100 <span>Rating: 5/5</span></p>
            <p class="product-rating"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
          </div>
        </div>
     <div>
    </section>

  @foreach ($products as $product)
    <section>
      <div class="card">
      <div class="product">
        <h2>{{ $product->name }}</h2>
        <p>ID: {{ $product->id }}</p>
        <p>by {{ $product->brand }}</p>
        <p>{{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p>
        <p>Rating: {{ $product->rating }}/5</p>
      </div>
      </div>
    </section>
  @endforeach
@stop
