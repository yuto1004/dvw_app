<!doctype html>
<html>
<head>
   <meta charset="utf-8"/>
   <title>寄り道マップ</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header class="header">
    <div class = "icon">
       <img src="{{ asset('assets/images/アイコン.png') }}">
       </div>
       <div class = "bottons">
       <a href="#" class="btn-flat-border">ログイン</a>
       <a href="#" class="btn-flat-border">新規登録</a>
       </div>
    </header>

@yield('content')

    <footer class="footer">
        <p>フッター</p>
    </footer>
</body>
</html>