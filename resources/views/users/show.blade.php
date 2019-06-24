@extends('layout')

@section('content')

<main>
  <div id="form-main">
    <div class="flexbox">
      <h2>{{$name}}さんの投稿一覧</h2>
      @foreach($reviews as $review)
        <section class="card">
          <img class="card-img" src="images/bear.jpg" alt="">
          <div class="card-content">
            @foreach($shops as $shop)
              @if($review->shop_id == $shop->id)
                <h1 class="card-title">{{$shop->shop_name}}</h1>
                @break
              @endif        
            @endforeach
            <span class="rate rate{{ $review->rate*20 }}"></span>
            <p class="card-text">{{$review->review}}</p>
          </div>
          <div class="card-link">
            <a href="{{$shop->link}}">Website</a>
          </div>
        </section>
      @endforeach
      {{$reviews->render()}}
    </div>
  </div>
</main>

@endsection