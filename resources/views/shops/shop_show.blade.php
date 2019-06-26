@extends('layout')

@section('content')
    <main>
        <div id="form-main">
            <h2>
            {{ $shop->shop_name }}へのみんなのレビュー
            </h2>
            <h2>
            <span class="rate rate{{ round($shop->reviews()->avg('rate')) }}0"></span>
            </h2>
            <ul class="shop_rate" id="list-module">
                @foreach( $reviews as $review )
                    <div id=form-shoplist>
                        <section class="flexbox_shoplist">
                        @if ( $review->images == NULL)
                            <img id=shop_avatar src="/assets/images/icon/no_image.png">
                        @else
                            <img id="shop_avatar" src="/assets/images/review/{{ $review->images }}" alt="">
                        @endif
                        <h2>{{ $review->name }}さんの投稿</h2>
                        <span class="rate rate{{ $review->rate }}0"></span>
                        <div class="review_scroll">
                            <p class="card-text">{{$review->review}}</p>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </main>
@endsection