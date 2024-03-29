<!doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>寄り道マップ</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="{{ asset('assets/javascripts/jquery-3.4.1.js',config('app.asset-secure')) }}"></script>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <div class = "icon">
        <img id=icon src="{{ asset('assets/images/icon/new_logo.JPG',config('app.asset-secure')) }}">
        </div>
        @if (Auth::check())
          <div class = "bottons">
            <nav>
              <ul>
                <li><a class="current" href="/">Home</a></li>
                <li><a href="/shops/index">Shop List</a></li>
                <li><a href="/users/{{ Auth::user()->id }}">My Page</a></li>
                <li><a class=post href="/review/create">Post</a></li>
                <li><a href="/logout">Sign out</a></li>
              </ul>
            </nav>
          </div>
        @else
          <div class = "bottons">
            <nav>
              <ul>
                <li><a class="current" href="/">Home</a></li>
                <li><a href="/shops/index">Shop List</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/login">Sign in</a></li>
                <li><a href="/register">Sign up</a></li>
              </ul>
            </nav>
          </div>
        @endif
      </header>
      @yield('content')
      <footer class="footer">
        <p>ZDC 2019年入社 Team5</p>
      </footer>
    </div>
  </body>
</html>