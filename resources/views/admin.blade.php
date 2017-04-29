<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <h1>Admin</h1>
    @if (session('loginSuccess'))
      <p>Welcome back, {{Auth::user()->name}}</p>
    @endif
  </body>
</html>
