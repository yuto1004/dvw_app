@extends('layout')

@section('content')

  <ul class="shop_rate" id="list-module">
    @foreach ($shops as $shop)
      <h3><a href="/shops/show/{{ $shop->id }}">{{ $shop->shop_name }}</a></h3>
      <span class="rate rate{{ round($shop->reviews()->avg('rate')) }}0"></span>
    @endforeach
  </ul>

@endsection