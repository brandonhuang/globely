@extends('layouts.main')

@section('title', $product->name . ' - Globely')

@section('content')
<section class="details">
  <div class="content">
    <div class="product-card">
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
        <form action="" method="POST">
          <button type="submit" class="buy teal">Order</button>
          <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
            data-amount="{{ $product->price * 100 }}"
            data-name="{{ $product->name }}"
            data-description="{{ $product->description }} (${{ number_format($product->price, 2) }})"
            data-image="/product_images/{{ $product->id }}.png"
            data-locale="auto">
          </script>
        </form>
      </div>
    </div>
    <div class="company-card-wrapper">
      <div class="company-card">
        <a href="/users/{{ $product->user->id }}" class="company-picture" style="background-image: url(/user_images/{{ $product->user->id }}.png)"></a>
        <a href="/users/{{ $product->user->id }}"><h2>{{ $product->user->company_name }}</h2></a>
        <h3>{{ $product->user->city }}, {{ $product->user->country }}</h3>
        <a href="https://{{ $product->user->website }}"><h3><i class="fa fa-globe"></i>{{ $product->user->website }}</h3></a>
        <a href="mailto://{{ $product->user->email }}"><h3><i class="fa fa-envelope"></i>{{ $product->user->email }}</h3></a>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="content">
    <h2>Related Products</h2>
  </div>
</section>
<section class="similar-products">
  <div class="content">
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
