@if(!$currentUser)
  <div class="navbar">
    <a href="/">
      <img src="/images/globely_white_logo.png" class="logo" alt="Globley Logo">
    </a>
    <nav>
      <a href="/products">Search</a>
      <a href="http://localhost:8000/auth/login">Login</a>
      <a href="/apply" class="with-border">Apply</a>
    </nav>
  </div>
@elseif($currentUser->type == 'distributor')
  <div class="navbar">
    <a href="/">
      <img src="/images/globely_white_logo.png" class="logo" alt="Globley Logo">
    </a>
    <nav>
      <a href="/products">Search</a>
      <a href="/auth/logout">Logout</a>
      <a href="/users/{{ $currentUser->id }}">{{ $currentUser->company_name }} <div style="background-image: url(/user_images/{{ $currentUser->id }}.png)" class="nav-img"></div></a>
    </nav>
  </div>
@else($currentUser->type == 'supplier')
  <div class="navbar">
    <a href="/">
      <img src="/images/globely_white_logo.png" class="logo" alt="Globley Logo">
    </a>
    <nav>
      <a href="/products/create">Add Product</a>
      <a href="/auth/logout">Logout</a>
      <a href="/users/{{ $currentUser->id }}">{{ $currentUser->company_name }} <div style="background-image: url(/user_images/{{ $currentUser->id }}.png)" class="nav-img"></div></a>
    </nav>
  </div>
@endif





