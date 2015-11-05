<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <script src="https://use.typekit.net/lni5ddu.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <link rel="stylesheet" type="text/css" href="/css/app.css"></link>
  @yield('javascript')
</head>
<body>
  @include('components.navbar')
  @yield('content')
</body>
</html>
