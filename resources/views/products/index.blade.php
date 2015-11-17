@extends('layouts.main')

@section('javascript')
  <script src="/js/dropdown.js"></script>
@stop

@section('content')
  <section id="search">
    <div class="content">
      <h1>Product Search</h1>
      <form method="GET" action="/products" class="search-bar">
        <div id="dd" class="wrapper-dropdown" tabindex="1">
          <span>Search By</span>
          <ul class="dropdown">
            <li><a href="#">Product Name</a></li>
            <li><a href="#">Brand</a></li>
            <li><a href="#">Supplier</a></li>
            <li><a href="#">Description</a></li>
          </ul>
        </div>
        <input type="text" name="query" placeholder="Search" value="{{ $query }}" required>
        <input type="submit" class="teal" value="Search">
      </form>
    </div>
  </section>
  <section>
    <div class="content">
      @foreach ($products as $product)
        <div class="row">
          <div class="card col-md-4 col-md-offset-1"> 
            <div class="header text-center">
                <h2 class="title">{{ $product->name }}</h2>
            </div>
            <div class="row">
              <div class="col-md-6">
                <img class="product-image" src="http://www.shmula.com/wp-content/uploads/2007/02/interface-is-product-ux-ui.jpg">
              </div>
              <div class="col-md-6 product-info">
                <p class="product-brand">by {{ $product->brand }}</p>
                <p class="product-desc">{{ $product->description }}</p>
                <p class="product-price">{{ $product->price }} <span>Rating: {{ $product->rating }}/5</span></p>
                <p class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
                <button class="green">Buy Now!</button>
              </div>
            </div>
          </div>
        </div>    
      @endforeach
    </div>
  </section>
@stop
