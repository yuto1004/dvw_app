<!doctype html>
<html>
<head>
   <meta charset="utf-8"/>
   <title>寄り道マップトップ</title>
    <link rel="stylesheet" href="/css/welcome.css">
</head>

<body>
    <header class="header">
       <img src="{{ asset('assets/images/アイコン.png') }}">
    </header>

    <main>
        <div class="content">
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      #map {
        height: 100%;
        width:100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 35.65786826127019, lng: 139.70091673026695},
          zoom: 13
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh0c7Qd5PE6KkiO5TKpcyhNfR3nnwxdjQ&callback=initMap"
    async defer></script>
        </div>

        <div class="localNavigation">
            <form id="search" action="自分のサイトURL">
              <input id="sbox" name="s" type="text" placeholder="寄り道したい駅" />
              <input id="sbtn" type="submit" value="検索" />
            </form>
            <div class="shop_link">
                <ul>
                    <li>お店１
                        <a href = "URL">リンク名</a>
                    </li>
                </ul>
                <p></p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>フッター</p>
    </footer>
</body>
</html>
