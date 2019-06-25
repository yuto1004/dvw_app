@extends('layout')

@section('content')
  <main>
    <div id="form-main">
      <h2>{{$name}}さんの投稿一覧</h2>
      @foreach($reviews as $review)
        <div id=form-shoplist>
          <section class="flexbox_shoplist">
            @if ( $review->images == NULL)
              <img id=shop_avatar src="/assets/images/no_image.png">
            @else
              <img id="shop_avatar" src="{{ $review->images }}" alt="">
            @endif
            @foreach($shops as $shop)
              @if($review->shop_id == $shop->id)
                <h3><a href="{{ $shop->link }}">{{ $shop->shop_name }}</a></h3>
                @break
              @endif        
            @endforeach
            <span class="rate rate{{ $review->rate*20 }}"></span>
            <p class="card-text">{{$review->review}}</p>

          </section>
        </div>
      @endforeach
      {{$reviews->render()}}
    </div>
  </main>
@endsection