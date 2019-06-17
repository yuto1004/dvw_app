@extends('layout')

@section('content')
    <main>
        <div class="content">
            <link rel="stylesheet" href="/css/top_map.css">
            <div id="map"></div>
            <!--ここでは入力された駅名から検索が反映されるようにする-->

            <script src="{{ asset('assets/javascripts/topmap.js') }}"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh0c7Qd5PE6KkiO5TKpcyhNfR3nnwxdjQ&callback=initMap"
            async defer></script>
        </div>

        <div class="localNavigation">
            <!--ここに検索方法のタブを実装する-->
            <div class="tab-menu">
              <ul id="test">
                <li id="left" class="selected">駅名で絞り込む</li>
                <li id="right">ジャンルで絞り込む</li>
              </ul>

              <div class="contents">
                <div class="left">
                  <p>駅名絞りコンテンツ</p>
                </div>
                <div class="right">
                  <p>生搾り牛乳</p>
                </div>
              </div>
            </div>
            <div class="shop_link">
                <ul>
                    <li>店名
                        <a href = "URL">店名のリンク</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    
@endsection