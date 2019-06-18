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
                  <form action="" method="post">
                    <p>
                    <input type="checkbox" name="genre" value="1">汐留
                    <input type="checkbox" name="genre" value="2">青山一丁目
                    <input type="checkbox" name="genre" value="3">表参道
                    <input type="checkbox" name="genre" value="3">代々木上原
                    <input type="checkbox" name="genre" value="3">代々木八幡
                    </p>
                    <p>
                    <input id="sbtn" type="submit" value="検索">
                    </p>
                  </form>
                </div>
                <div class="right">
                  <form action="" method="post">
                    <p>
                    <input type="checkbox" name="genre" value="1">Live House
                    <input type="checkbox" name="genre" value="2">Hamburger Shop
                    <input type="checkbox" name="genre" value="3">Cat Cafe
                    </p>
                    <p>
                    <input id="sbtn" type="submit" value="検索">
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