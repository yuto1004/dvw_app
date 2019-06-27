@extends('layout')

@section('content')
    <main>
      <div class="content">
        <link rel="stylesheet" href="/css/top_map.css">
        <div id="searchmap"></div>
        <!--ここでは入力された駅名から検索が反映されるようにする-->

        <script src="{{ asset('assets/javascripts/searchmap.js',config('app.asset-secure')) }}"
        id="hogejs" data-keiro1="{{$keiro1}}" data-keiro2="{{$keiro2}}" data-shops="{{$shops}}" data-bar="{$bar}"
        data-reviews="{{$reviews}}"></script>
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
                
                  <p class= "radio"><input type="radio" name="place" id="place" value="汐留駅"> 汐留</p>
                  <p class= "radio"><input type="radio" name="place" id="place" value="青山１丁目"> 青山一丁目</p>
                  <p class= "radio"><input type="radio" name="place" id="place" value="表参道駅"> 表参道</p>
                  <p class= "radio"><input type="radio" name="place" id="place" value="代々木上原駅"> 代々木上原</p>
                  <p class= "radio"><input type="radio" name="place" id="place" value="代々木八幡駅"> 代々木八幡</p>
                
                <p>
                  <input id="sbtn"  type="button" value="絞り込む" onclick="station();">
                </p>
              </form>

            </div>
            <div class="right">
              <form method="post" id="genre" name="form2">
                @foreach($genres as $genre)
                  <p class= "radio">
                    @if($genre->genre != NULL)
                    <input type="radio" name="genre" value="{{$genre->genre}}"> {{$genre->genre}}
                    @endif
                  </p>
                @endforeach
                <p>
                  <input id="sbtn" type="button" value="絞り込む" onclick="genresearch();"><br>
                  <input id="sbtn" type="button" value="ランダム" onclick="randomsearch();">
                </p>
              </form>
            </div>
          </div>
        </div>
        <div class="shop_link">
          <h3><a href="/shops/index">Shop List</a></h3>
          @foreach($shops as $shop)
            <p>
              <a href = {{$shop->link}}>{{$shop->shop_name}}</a>
            </p>
          @endforeach
      </div>
    </div>
  </main>   
@endsection