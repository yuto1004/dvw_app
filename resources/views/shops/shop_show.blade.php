@extends('layout')

@section('content')

    <ul class="shop_rate" id="list-module">
        <h3>{{ $shop->shop_name}}</h3>
        <span class="rate rate{{ round($shop->reviews()->avg('rate')) }}0"></span><br><br><br>
        @foreach($reviews as $review)
            <span class="rate rate{{ $review->rate }}0"></span>
            <p class="card-text">{{$review->review}}</p>
        @endforeach
    </ul>

@endsection