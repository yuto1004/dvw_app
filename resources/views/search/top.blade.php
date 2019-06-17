@extends('layout')

@section('content')
    <main>
        <div class="content">
            <link rel="stylesheet" href="/css/top_map.css">
            <div id="map"></div>
            <script src="{{ asset('assets/javascripts/topmap.js') }}"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh0c7Qd5PE6KkiO5TKpcyhNfR3nnwxdjQ&callback=initMap"
            async defer></script>
    
        </div>

        <div class="localNavigation">
            <form id="search" action="/map/search/">
              <input id="sbox" name="s" type="text" placeholder="出発駅" />
            </form>
            <form id="search" action="/map/search/">
              <input id="sbox" name="s" type="text" placeholder="到着駅" />
              <p><input id="sbtn" type="submit" value="検索" /></p>
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
@endsection