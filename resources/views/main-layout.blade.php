<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
        <ul class="nav">
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/invoices">Invoices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup">Sign Up</a>
                </li>
            @endif
        </ul>
        <br>
        @yield('content')
    </div>
  </body>
</html>
