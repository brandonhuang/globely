@extends('layouts.main')

@section('title', 'Globely Style Guide')

@section('content')
  <section>
    <div class="content">
      <h1>Globely Style Guide</h1>
    </div>
  </section>
  <section>
    <div class="content">
      <h2>Navbar</h2>
      @include('components.navbar')
    </div>
  </section>
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
@stop
