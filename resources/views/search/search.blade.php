@extends('layout')

@section('content')
    <main>
        <div class="content">
            <link rel="stylesheet" href="/css/top_map.css">
            <div id="searchmap"></div>
            <!--ここでは入力された駅名から検索が反映されるようにする-->

            <script src="{{ asset('assets/javascripts/searchmap.js') }}"></script>
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
                  <form method="get" id="target">
                    <p>
                    <input type="radio" name="place" id="place" value="汐留駅">汐留
                    <input type="radio" name="place" id="place" value="青山１丁目">青山一丁目
                    <input type="radio" name="place" id="place" value="表参道駅">表参道
                    <input type="radio" name="place" id="place" value="代々木上原駅">代々木上原
                    <input type="radio" name="place" id="place" value="代々木八幡駅">代々木八幡
                    </p>
                    <p>
                    <input id="sbtn"  type="button" value="検索" onclick="station();">
                    </p>
                  </form>

                </div>
                <div class="right">
                  <form method="post">
                    <p>
                    <input type="checkbox" name="genre" value="1">Live House
                    <input type="checkbox" name="genre" value="2">Hamburger Shop
                    <input type="checkbox" name="genre" value="3">Cat Cafe
                    </p>
                    <p>
                    <input id="sbtn" type="button" value="検索" onclick="test2();">
                    </p>
                  </form>
                </div>
              </div>
            </div>
            <div class="shop_link">
               @foreach($shops as $shop)
                 <p>
                 <a href = {{$shop->link}}>{{$shop->shop_name}}</a>
                 </p>
               @endforeach
            </div>
        </div>
    </main>

    
@endsection