@extends('layout')

@section('content')
<main>
  <div class="shop_rate" id="list-module">
    @foreach ($shops as $shop)
    <div id=form-shoplist>
      <div class=flexbox_shoplist>
        @if( $shop->avatar == NULL)
          <img id=shop_avatar src="/assets/images/no_image.png">
        @else
          <img id=shop_avatar src="{{$shop->avatar}}">
        @endif
        <h3><a href="/shops/show/{{ $shop->id }}">{{ $shop->shop_name }}</a></h3>
        <span class="rate rate{{ round($shop->reviews()->avg('rate')) }}0"></span>
      </div>
    </div>
    @endforeach
    {{$shops->render()}}
  </div>
</main>
@endsection