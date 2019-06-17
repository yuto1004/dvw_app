<!doctype html>
<html>
<head>
   <meta charset="utf-8"/>
   <title>寄り道マップ</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="{{ asset('assets/javascripts/jquery-3.2.1.js') }}"></script>
</head>

<body>
    <header class="header">
    <div class = "icon">
       <img src="{{ asset('assets/images/icon_green.png') }}">
       </div>
       <div class = "bottons">
        <nav>
          <ul>
           <li><a class=”current” href=”#”>Home</a></li>
           <li><a href=”#”>News</a></li>
           <li><a href=”#”>About</a></li>
           <li><a href=”#”>Sign in</a></li>
           <li><a href=”#”>Sign up</a></li>
          </ul>
        </nav>
       </div>
    </header>

@yield('content')

    <footer class="footer">
        <p>ZDC 2019年入社 Team5</p>
    </footer>
</body>
</html>