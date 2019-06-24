@extends('layout')

@section('content')

<ul class="shop_rate" id="list-module">
        <div class="col">
            <div class="thumbnail__caption">
                <h3>{{ $shop->shop_name}}</h3>
                <span class="rate">
                    <i class="star-actived rate-{{ round($shop->reviews()->avg('rate')) }}0"></i><br>
                </span>
                @foreach($reviews as $review)
                    <span class="rate">
                        <i class="star-actived rate-{{ $review->rate }}0"></i>
                    </span>
                    <p class="card-text">{{$review->review}}</p>
                @endforeach
            </div>
        </div>
    </ul>

@endsection