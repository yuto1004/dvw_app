@extends('layout')

@section('content')

<main>
<div id="form-main">
  <div class="flexbox">

    <section class="card">
  <img class="card-img" src="images/bear.jpg" alt="">
  <div class="card-content">
    <h1 class="card-title">Webクリエイターボックス</h1>
    <p class="card-text">ここに投稿文。</p>
  </div>
  <div class="card-link">
    <a href="">About</a>
    <a href="">Website</a>
  </div>
</section>

  </div>
</div>
</main>


<!-- <div class="contents row" >
        <p>{{ $name }}さんの投稿一覧</p>
        @foreach($reviews as $review)
            <div class="content_post" style="background-image: url({{ $tweet->image }});">
                <p>{{$review->text}}</p>
                <span class="name">
                    <a href="#"><span>投稿者</span>{{ $name }}</a>
                </span>
            </div>
        @endforeach
        {{ $reviews->render() }}
    </div>-->

@endsection