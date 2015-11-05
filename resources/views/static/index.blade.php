@extends('layouts.main')

@section('title', 'Globley | Go Global')

@section('javascript')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
  <script src="/js/index_charts.js"></script>
@stop

@section('content')
  <div class="gallery items-2">
    <div id="item-1" class="control-operator"></div>
    <div id="item-2" class="control-operator"></div>

    <figure class="item" id="item-1">
      <div class="slider-left">
        <h1>The global way to buy and sell.</h1>
        <h2>Welcome to the new way to bring goods to market.</h2>
        <a class="button teal" href="/login">Login</a>
        <a class="button teal" href="/apply">Apply</a>
      </div>
    </figure>

    <figure class="item" id="item-2">
      <div class="slider-full">
        <h1>Featured Products</h1>
        <a class="featured" href="/apply">
          <div class="container">
            <img src="/images/baby_food.jpeg">
            <div class="banner">
              <h3>Baby Food</h3>
              <h4>Gerber</h4>
            </div>
          </div>
        </a>
        <a class="featured" href="/apply">
          <div class="container">
            <img src="/images/yogurt.jpg">
            <div class="banner">
              <h3>Baby Yogurt</h3>
              <h4>Gerber</h4>
            </div>
          </div>
        </a>
        <a class="featured" href="/apply">
          <div class="container">
            <img src="/images/pot.jpg">
            <div class="banner">
              <h3>Pumpkin Dish</h3>
              <h4>Sur La Tabel</h4>
            </div>
          </div>
        </a>
      </div>
    </figure>

    <div class="controls">
      <a href="#item-1" class="control-button">•</a>
      <a href="#item-2" class="control-button">•</a>
    </div>
  </div>
  <section id="stats">
    <div class="content">
      <h1>Globalize Your Business.</h1>
      <div class="stats">
        <div class="canvas-size">
          <canvas id="volume" width="400" height="400"></canvas>
        </div>
        <h3>High Volumes</h3>
        <p>China's boasts the world highest volume of online product sales, larger than the US and UK combined.</p>
      </div>
      <div class="stats">
        <div class="canvas-size">
          <canvas id="growth" width="400" height="400"></canvas>
        </div>
        <h3>Continued Growth</h3>
        <p>Ecommerce sales in China are projected to grow by 25% yearly.</p>
      </div>
      <div class="stats">
        <div class="canvas-size">
          <canvas id="audience" width="400" height="400"></canvas>
        </div>
        <h3>Large Audience</h3>
        <p>Make your product available to one of the largest populations in the world.</p>
      </div>
    </div>
  </section>
  <section id="apply-now">
    <class class="content">
      <h1>Apply Now</h1>
      <a class="button green" href="/apply?type=supplier">I am a distributor</a>
      <a class="button green" href="/apply?type=distributor">I am a supplier</a>
    </class>
  </section>
@stop
