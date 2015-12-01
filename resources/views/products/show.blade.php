@extends('layouts.main')

@section('title', $product->name . ' - Globely')

@section('content')
<section class="details">
  <div class="content">
    <div class="image" style="background-image: url(/product_images/{{ $product->id }}.png)"></div>
    <div class="price">$ {{ number_format($product->price, 2) }}</div>
    <div class="info">
      <div class="product-header">
        <h1>{{ $product->name }}</h1>
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
      <p>{{ $product->description }}</p>
      <button class="buy teal">Order</button>
    </div>
  </div>
</section>
<section class="supplier">
  <div class="content">
    <a class="company-image" href="/users/{{ $product->user->id }}" style="background-image: url(/user_images/{{ $product->user->id }}.png)" title="{{ $product->company }}"></a>
    <div class="supplier-info">
      <h2>Posted by {{ $product->user->company_name }}</h2>
      <p>{{ $product->user->city }}, {{ $product->user->country }}</p>
    </div>
  </div>
</section>
<section class="similar-products">
  <div class="content">
    <h2>Similar Products</h2>
    <div class="search-results">
      @foreach ($simProducts as $simProduct)
        @if ($simProduct->id != $product->id)
          <div class="product">
            <a href="/products/{{ $simProduct->id }}">
              <div class="image" style="background-image: url(/product_images/{{ $simProduct->id }}.png)"></div>
              <div class="price">$ {{ number_format($simProduct->price, 2) }}</div>
              <div class="info">
                <a class="company-image" href="/users/{{ $simProduct->user->id }}" style="background-image: url(/user_images/{{ $simProduct->user->id }}.png)" title="{{ $simProduct->company }}"></a>
                <h3>{{ $simProduct->name }}</h3>
                <h4>by {{ $simProduct->brand }}</h4>
                <div class="rating">
                  @for($i = 0; $i < 5; $i++)
                    @if(($simProduct->rating - $i) >= 1)
                      <i class="fa fa-star"></i>
                    @elseif(($simProduct->rating - $i) > 0)
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
        @endif
      @endforeach
    </div>
  </div>
</section>
@stop
