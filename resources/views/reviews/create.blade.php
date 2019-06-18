@extends('layout')

@section('content')
<main>
<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">


      <p class="shop_name">
        <input name="shop_name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="shop_name" placeholder="Shop's name" />
      </p>

      <p>
<div class="cp_ipselect cp_sl01">
<select required class="feedback-input-post">
  <option value="" hidden>Choose</option>
  <option value="1">Live House</option>
  <option value="2">Hamburger Shop</option>
  <option value="3">Cat Cafe</option>
  <option value="4"></option>
</select>
</div>
      </p>

      <p class="address">
        <input name="address" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="address" placeholder="Address"/>
      </p>

      <p class="link">
        <input name="link" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="link" placeholder="Link"/>
      </p>

      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
      </p>

      <div class="submit">
        <input type="submit" value="Post" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
</div>
</main>
@endsection

<!--pictweetより転載

@section('content')
<div id="main_cnt_wrapper">
  <div id="yjContentsBody">
    <div class="yjContainer">
      <span class="yjGuid"><a id="yjContentsStart" name="yjContentsStart"></a><img alt="ここから本文です" height="1" src="http://i.yimg.jp/yui/jp/tmpl/1.1.0/audionav.gif" width="1"></span>
      <div id="yjMain">
        <article class="section">
          <div class="container">
            <header class="header header--section">
              <h2 class="text-middle">
                <i class="icon-movie color-gray-light"></i>投稿
              </h2>
            </header>
            <div>
              <ul class="listview js-lazy-load-images">
                <li style="margin-bottom: 15px">
                  <a class="listview__element--right-icon" href="#">
                    <div class="box">
                      <div class="box__cell w80">
                        <div class="thumbnail thumbnail--photo">
                          <div class="thumbnail__figure" style="background-image: url({{ $product->image_url }});"></div>
                        </div>
                      </div>
                      <div class="box__cell pl1em">
                        <h3 class="text-middle text-break color-sub">
                          {{ $product->title }}
                        </h3>
                        <p class="text-xsmall">
                        </p>
                        <p class="text-xsmall opacity-60"></p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          {{ Form::model($review, array('action' => array('ReviewsController@store', $product->id))) }}
          <div style="margin: 8px 0">
            {{ Form::label('nickname', 'ニックネーム', ['style' => 'margin-right:8']) }}
            {{ Form::text('nickname') }}
          </div>
          <div style="margin: 8px 0">
            {{ Form::label('rate', '評価', ['style' =>  'margin-right:8;']) }}
            {{ Form::selectRange('rate', 1, 10, ['placeholder' => '評価', 'class' => 'searh__query', 'style' => 'text-align: right;']) }}
          </div>
          <div style="margin: 8px 0">
            {{ Form::textarea('review', '', ['placeholder' => 'レビューを書いてね！', 'style' => 'width: 100%;height: 300px;']) }}
          </div>
          <div class="row">
            <div class="col10 push1">
              {{ Form::submit('投稿する', ['class' => 'btn btn--block']) }}
            </div>
          </div>
          {!! Form::close() !!}
        </article>
      </div>
      <div id="yjSub">
@endsection
-->
