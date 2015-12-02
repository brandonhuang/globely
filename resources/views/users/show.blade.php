@extends('layouts.main')

@section('content')
<div class="google-maps">
  <iframe
  width="100%"
  height="400"
  frameborder="0" style="border:0"
  scrollable=no
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDxqa415WVyesR-FbNoCHPiEMS7ng4JFbY
    &q={{ $user->city }}&zoom=9">
</iframe>
</div>
<section class="profile">
  <div class="content">
    <div class="company-card-wrapper">
      <div class="company-card">
        <div class="company-picture" style="background-image: url(/user_images/{{ $user->id }}.png)"></div>
        <h2>{{ $user->company_name }}</h2>
        <h3>{{ $user->city }}, {{ $user->country }}</h3>
        <a href="https://{{ $user->website }}"><h3><i class="fa fa-globe"></i>{{ $user->website }}</h3></a>
        <a href="mailto://{{ $user->email }}"><h3><i class="fa fa-envelope"></i>{{ $user->email }}</h3></a>
        @if($currentUser->id == $user->id)
          <a href="/users/{{ $user->id }}/edit" class="edit teal">Account</a>
        @endif
      </div>
    </div>
    <div class="company-products">
      <div class="search-results">
      @foreach ($products as $product)
          <div class="product">
            <a href="/products/{{ $product->id }}">
              <div class="image" style="background-image: url(/product_images/{{ $product->id }}.png)"></div>
              <div class="price">$ {{ number_format($product->price, 2) }}</div>
              <div class="info">
                @if($currentUser->id == $user->id)
                  <a href="/products/{{ $product->id }}/edit" class="edit teal">Edit</a>
                @else
                  <a class="company-image" href="/users/{{ $product->user->id }}" style="background-image: url(/user_images/{{ $product->user->id }}.png)" title="{{ $product->company }}"></a>
                @endif
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
        @if($currentUser->id == $user->id)
          <div class="add-product">
            <a href="/products/create">
              <div class="image">
                <i class="fa fa-plus"></i>
              </div>
              <div class="info">
              </div>
            </a>
          </div>
        @endif
      </div>
    </div>
  </div>

</section>
@stop
