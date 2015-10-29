@extends('layouts.main')

@section('content')
  <div class="gallery autoplay items-3">
    <div id="item-1" class="control-operator"></div>
    <div id="item-2" class="control-operator"></div>
    <div id="item-3" class="control-operator"></div>

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
        <a class="featured" href="#">
          <div class="content">
            <div class="banner">
              <h3>Outdoor Furniture Set</h3>
              <h4>Overstock</h4>
            </div>
          </div>
        </a>
        <a class="featured" href="#">
          <div class="content">
            <div class="banner">
              <h3>Pumpkin Dish</h3>
              <h4>Sur La Tabel</h4>
            </div>
          </div>
        </a>
        <a class="featured" href="#">
          <div class="content">
            <div class="banner">
              <h3>Baby Yogurt</h3>
              <h4>Gerber</h4>
            </div>
          </div>
        </a>
      </div>
    </figure>

    <figure class="item" id="item-3">
      <h1>3</h1>
    </figure>

    <div class="controls">
      <a href="#item-1" class="control-button">•</a>
      <a href="#item-2" class="control-button">•</a>
      <a href="#item-3" class="control-button">•</a>
    </div>
  </div>
  <section>
    <div class="content">
      <h1>H1 - Main</h1>
      <h2>H2 - Sub Heading</h2>
      <h3>H2 - Subbest Heading</h3>
      <p>Paragraph text - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </section>
  <section>
    <div class="content">
      <h2>Buttons</h2>
      <button class="green">Over Here!</button>
      <button class="teal">Click Me!</button>
      <button class="blue">No Me!</button>
    </div>
  </section>
  <section>
    <div class="content">
      <h2>Input Boxes</h2>
      <label for="green">Green</label>
      <input id="gren" class="green" type="text" placeholder="I'm a textbox!">
      <label for="teal">Teal</label>
      <input id="teal" class="teal" type="text" placeholder="Please write in me!">
      <label for="blue">Blue</label>
      <input id="blue" class="blue" type="text" placeholder="Me too!">
    </div>
  </section>
  <footer class="footer">
      2015 Globely 
  </footer>
@stop
