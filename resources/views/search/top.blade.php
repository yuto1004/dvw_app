@extends('layout')

@section('content')
    <main>
        <div class="content">
        <script src="{{ asset('assets/javascripts/top_map.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh0c7Qd5PE6KkiO5TKpcyhNfR3nnwxdjQ&callback=initMap"
    async defer></script> 
    <link href="/css/top_map.css">
    <div id="top_map"></div>
        </div>


        <div class="localNavigation">
            <form id="search" action="自分のサイトURL">
              <input id="sbox" name="s" type="text" placeholder="出発駅" />
            </form>
            <form id="search" action="自分のサイトURL">
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