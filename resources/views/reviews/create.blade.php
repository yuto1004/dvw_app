@extends('layout')

@section('content')
<main>
{{ Form::open(['url' => '/review', 'method' => 'post']) }}
<div id="form-main">
  <div id="form-div">
    <div class="form" id="form1" action="">


      <p class="shop_name">
      <div class="cp_ipselect cp_sl01">
      
      <select required class="feedback-input-post">
      
      <option value="" hidden>Choose</option>
      @foreach($shops as $shop)
      <option value="{{$shop->id}}">{{$shop->shop_name}}</option>
      @endforeach
      <option value="others">Others（新規登録ボタンをクリックしてください）</option>
      </select>
      
      </div>
        <!--ここに店名のプルダウンとお店新規登録画面への遷移ボタン-->
        <a id="sbtn" href="/shop/create">お店を新規登録する</a>
      </p>


      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
      </p>

      <div class="submit">
        <input type="submit" value="Post" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </div>
</div>
</main>
{{ Form::close() }}
@endsection
