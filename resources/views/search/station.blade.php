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
            <link rel="stylesheet" href="/css/station.css">
            <script src="{{ asset('assets/javascripts/station.js') }}"></script>
            <div class="tab-menu">
                <ul>
                    <li id="left" class="selected">駅名で絞り込み</li>
                    <li id="right">ジャンルで絞り込み</li>
                </ul>
                <div class="contents">
                    <div class="left">
                      <p>駅名コンテンツ</p>
                    </div>
                    <div class="right">
                      <p>ジャンルコンテンツ</p>
                    </div>
                </div>
            </div>
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