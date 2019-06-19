@extends('layout')

@section('content')
<main>
{{ Form::open() }}
<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" action="">


      <p class="shop_name">
      <div class="cp_ipselect cp_sl01">
      
      <select required class="feedback-input-post">
      
      <option value="" hidden>Choose</option>
      @foreach($shops as $shop)
      <option value="{{$shop->id}}">{{$shop->shop_name}}</option>
      @endforeach
      </select>
      
      </div>
        <!--<input name="shop_name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="shop_name" placeholder="Shop's name" />
      ここに店名のプルダウンとお店新規登録画面への遷移ボタン-->
      </p>
<!--ここからはお店の新規登録の内容-->

<!--
      <p class="address">
        <input name="address" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="address" placeholder="Address"/>
      </p>

      <p class="link">
        <input name="link" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="link" placeholder="Link"/>
      </p>
-->

      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
      </p>

      <div class="submit">
        <input type="submit" value="Post" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
</div>
</main>
{{ Form::close() }}
@endsection
