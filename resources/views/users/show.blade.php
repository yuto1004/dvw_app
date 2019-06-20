@extends('layout')

@section('content')
<div class="contents row" >
        <p>{{ $name }}さんの投稿一覧</p>
        @foreach($reviews as $review)
            <!--div class="content_post" style="background-image: url({{ $tweet->image }});"-->
                <p>{{$review->text}}</p>
                <span class="name">
                    <a href="#"><span>投稿者</span>{{ $name }}</a>
                </span>
            </div>
        @endforeach
        {{ $reviews->render() }}
    </div>

@endsection