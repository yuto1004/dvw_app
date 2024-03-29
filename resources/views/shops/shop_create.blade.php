@extends('layout')

@section('content')
  <main>
    {{ Form::open(['url' => '/shops', 'method' => 'post']) }}
      <div id="form-main">
        <div id="form-div">
          <h2>新たにお店を登録する</h2>
          <div class="form" id="form1">
            <p class="shop_name">
              <input name="shop_name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="shop_name" placeholder="Shop's name" />
            </p>
            <p>
              <div class="cp_ipselect cp_sl01">
                <select required class="feedback-input-post" name ="genre">
                  <option value="" hidden>Choose</option>
                  @foreach($genres as $genre)
                    <option value="{{$genre->genre}}">{{$genre->genre}}</option>
                  @endforeach
                  <option value="others">Others</option>
                </select>
                <!--Otherが選ばれた時にここに新規ジャンルのテキストボックスを出したい-->
              </div>
            </p>
            <p class="address">
              <input name="address" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="address" placeholder="Address"/>
            </p>
            <p class="link">
              <input name="link" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="link" placeholder="Link"/>
            </p>
            <div class="submit">
              <input type="submit" value="Register a new shop!" id="button-blue"/>
              <div class="ease"></div>
            </div>
          </div>
        </div>
      </div>
    {{ Form::close() }}
  </main>
@endsection