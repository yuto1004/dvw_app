@extends('layout')

@section('content')

  <ul class="shop_rate" id="list-module">
    @foreach ($shops as $shop)
      <div class="col">
        <div class="thumbnail__caption">
          <h3>
          <a href="/shops/show/{{ $shop->id }}">{{ $shop->shop_name }}</a>
          </h3>
          <span class="rate"></span>
            <i class="rate{{ round($shop->reviews()->avg('rate')) }}0"></i>
        </div>
      </div>
    @endforeach
  </ul>

@endsection