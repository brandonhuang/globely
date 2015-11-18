@extends('layouts.main')

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
          <div class="image" style="background-image: url(http://bhodbuzz.com/wp-content/uploads/2015/06/6924750-mountain-wallpaper.jpg)"></div>
          <div class="info">
            <a class="company-image" href="#company-profile-link" style="background-image: url(/images/globely_logo.png)"></a>
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
        </div> 
      @endforeach
    </div>
  </section>
@stop
