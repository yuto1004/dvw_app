@extends('layout')

@section('content')
  <main>
    {{ Form::open(['url' => '/review', 'method' => 'post', 'files' => true]) }}
      <div id="form-main">
        <div id="form-div">
          <h2>{{$shop->shop_name}}に投稿する</h2>
          <div class="form" id="form1" action="">
            <p class="shop_name">
                <select required class="feedback-input-post" name="shop_id">
                    <option value="{{$shop->id}}" hidden>{{$shop->shop_name}}</option>
                </select>

              </div>
            </p>
            <p class="rate_select">
              <select required class="feedback-input-post" name="rate">
                <option value="" hidden>Rate Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </p>
            <p class="text">
              <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
            </p>

            <p class="field">
            {{ Form::file('images') }}
            </p>

            <div class="submit">
              <input type="submit" value="Post" id="button-blue"/>
              <div class="ease"></div>
            </div>
          </div>
        </div>
      </div>
    </main>
  {{ Form::close() }}
@endsection
