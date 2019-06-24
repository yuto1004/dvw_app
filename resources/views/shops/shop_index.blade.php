@extends('layout')

@section('content')

<ul class="thumbnails thumbnail--shops row grid4 js-lazy-load-images js-my-check-stats" id="list-module">
                @foreach ($shops as $shop)
                  <div class="col">
                    <div class="thumbnail__caption">
                      <h3>
                      <a href="/shops/show/{{ $shop->id }}">{{ $shop->shop_name }}</a>
                      </h3>
                      <span class="rate">
                        <i class="star-actived rate-{{ round($shop->reviews()->avg('rate')) }}0"></i>
                      </span>
                    </div>
                  </div>
                @endforeach
              </ul>

@endsection