@extends('layout')

@section('content')
    <main>
        <div class="content">
            <p>コンテンツ</p>
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