@extends('layout')

@section('content')
    <main>
        <div id="form-main">
            <h2>
            {{ $shop->shop_name }}に対する投稿一覧<br>
            <span class="rate rate{{ round($shop->reviews()->avg('rate')) }}0"></span>
            </h2>        
            <ul class="shop_rate" id="list-module">
                @foreach( $reviews as $review )
                    <div id=form-shoplist>
                        <section class="flexbox_shoplist">
                        @if ( $review->images == NULL)
                            <img id=shop_avatar src="/assets/images/no_image.png">
                        @else
                            <img id="shop_avatar" src="{{ $review->images }}" alt="">
                        @endif
                        <h2>{{ $review->name }}さんの投稿</h2>
                        <span class="rate rate{{ $review->rate }}0"></span>
                        <p class="card-text">{{$review->review}}</p>
                    </div>
                @endforeach
            </ul>
        </div>
    </main>
@endsection