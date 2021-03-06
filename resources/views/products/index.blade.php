@extends('layouts.main')

@section('title', 'Browse - Globely')

@section('javascript')
  <script src="/js/dropdown.js"></script>
  <script src="/js/form_submit.js"></script>
@stop

@section('content')
  <section id="search">
    <div class="content">
      <h1>Product Search</h1>
      <form method="GET" action="/products" class="search-bar">
        <div id="dd" class="wrapper-dropdown {{ isset($prop) ? 'filled' : '' }}" tabindex="1">
          <span>{{ isset($prop) ? $prop : 'Search By' }}</span>
          <ul class="dropdown">
            <li><a href="#">Any</a></li>
            <li><a href="#">Product Name</a></li>
            <li><a href="#">Brand</a></li>
            <li><a href="#">Supplier</a></li>
            <li><a href="#">Description</a></li>
          </ul>
        </div>
        <input type="hidden" id="prop" name="prop">
        <input type="text" name="query" placeholder="Search" value="{{ $query }}" required>
        <input type="submit" class="teal" value="Search">
        <div class="clear"></div>
        <p>Your search returned {{ sizeof($products) }} result(s).</p>
      </form>
    </div>
    <div class="search-results">
      @foreach ($products as $product)
        <div class="product">
          <a href="/products/{{ $product->id }}">
            <div class="image" style="background-image: url(/product_images/{{ $product->id }}.png)"></div>
            <div class="price">$ {{ number_format($product->price, 2) }}</div>
            <div class="info">
              <a class="company-image" href="/users/{{ $product->user->id }}" style="background-image: url(/user_images/{{ $product->user->id }}.png)" title="{{ $product->company }}"></a>
              <h3>{{ $product->name }}</h3>
              <h4>by {{ $product->brand }}</h4>
              <div class="rating">
                @for($i = 0; $i < 5; $i++)
                  @if(($product->rating - $i) >= 1)
                    <i class="fa fa-star"></i>
                  @elseif(($product->rating - $i) > 0)
                    <i class="fa fa-star-half-o"></i>
                  @else
                    <i class="fa fa-star-o"></i>
                  @endif
                @endfor
                <p>{{ rand(1, 10) }} ratings</p>
              </div>
            </div>
          </a>
        </div> 
      @endforeach
    </div>
  </section>
@stop
