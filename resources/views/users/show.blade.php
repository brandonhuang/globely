@extends('layouts.main')

@section('content')
<section class="map">
  <div class="google-maps"></div>
</section>
<section class="profile">
  <div class="content">
    <div class="company-picture" style="background-image: url(/user_images/{{ $user->id }}.png)"></div>
    <h3>{{ $user->city }}, {{ $user->country }}</h3>
    <h2>{{ $user->company_name }}</h2>
    <a href="https://{{ $user->website }}"><h3>{{ $user->website }}</h3></a>
  </div>
</section>
<section class="company-products">
  <div class="content">
    <h2>More From {{ $user->company_name }}</h2>
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
  </div>
</section>
@stop
