@extends('layout')

@section('content')
  <main>
    <div class="shop_rate" id="list-module">
      @foreach ($shops as $shop)
      <div id=form-shoplist>
        <div class=flexbox_shoplist>
          @if( $shop->avatar == NULL)
            <img id=shop_avatar src="/assets/images/icon/no_image.png">
          @else
            <img id=shop_avatar src="{{$shop->avatar}}">
          @endif
          <h3 class="shop_title"><a>{{ $shop->shop_name }}</a></h3>
          <h2><span class="rate rate{{ round($shop->reviews()->avg('rate')) }}0"></span></h2>
          <h3><a href="/shops/show/{{ $shop->id }}">Review</a></h3>
          <h3><a href="{{ $shop->link }}">Web site</a></h3>
        </div>
      </div>
      @endforeach
    </div>
  </main>
  {{$shops->render()}}
@endsection