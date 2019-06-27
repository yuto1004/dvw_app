@extends('layout')

@section('content')
  <main>
    <div class="content">
        <link rel="stylesheet" href="/css/top_map.css">
        <div id="map"></div>
        <script src="{{ asset('assets/javascripts/topmap.js',config('app.asset-secure')) }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh0c7Qd5PE6KkiO5TKpcyhNfR3nnwxdjQ&callback=initMap"
        async defer></script>
    </div>

    <div class="localNavigation">
      <form id="search" action="/map/search/" method="get">
        <p class="explain">出発駅と目的の駅を入力してください</p>
        <input id="sbox" name="s[]" type="text" placeholder="出発駅" /><br>
        <input id="sbox" name="s[]" type="text" placeholder="到着駅" />
        <p class="sbtn">
          <input id="sbtn" type="submit" value="検索">
        </p>
      </form>
      <div class="shop_link">
        <h3 class= "shop_list"><a href="/shops/index">Shop List</a></h3>
        <div class="shop_links">
          @foreach($shops as $shop)
            <p>
            <a href = {{$shop->link}}>{{$shop->shop_name}}</a>
            </p>
          @endforeach
        </div>
      </div>
    </div>
  </main>
@endsection