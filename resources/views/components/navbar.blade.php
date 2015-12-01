@if(Auth::user()->type == 'distributor')
  <div class="navbar">
    <a href="/">
      <img src="/images/globely_white_logo.png" class="logo" alt="Globley Logo">
    </a>
    <nav>
      <a href="/how-it-works">How It Works</a>
      <a href="/products/create">Add Products</a>
      <a href="/users">Users</a>
      <a href="/auth/logout">Logout</a>
      <a href="/products" class="with-border">Browse</a>
    </nav>
  </div>
@elseif(Auth::user()->type == 'supplier')
  <div class="navbar">
    <a href="/">
      <img src="/images/globely_white_logo.png" class="logo" alt="Globley Logo">
    </a>
    <nav>
      <a href="/how-it-works">How It Works</a>
      <a href="/products/create">Add Products</a>
      <a href="/users">Users</a>
      <a href="/auth/logout">Logout</a>
      <a href="/products" class="with-border">Browse</a>
    </nav>
  </div>
@else
  <div class="navbar">
    <a href="/">
      <img src="/images/globely_white_logo.png" class="logo" alt="Globley Logo">
    </a>
    <nav>
      <a href="/how-it-works">How It Works</a>
      <a href="/products">Products</a>
      <a href="http://localhost:8000/auth/login">Login</a>
      <a href="/apply" class="with-border">Apply</a>
    </nav>
  </div>
@endif





