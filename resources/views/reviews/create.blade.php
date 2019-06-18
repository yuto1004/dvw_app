@extends('layout')

@section('content')
<main>
<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">


      <p class="shop_name">
        <input name="shop_name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="shop_name" placeholder="Shop's name" />
      </p>

      <p>
<div class="cp_ipselect cp_sl01">
<select required class="feedback-input-post">
  <option value="" hidden>Choose</option>
  <option value="1">Live House</option>
  <option value="2">Hamburger Shop</option>
  <option value="3">Cat Cafe</option>
  <option value="4"></option>
</select>
</div>
      </p>

      <p class="address">
        <input name="address" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="address" placeholder="Address"/>
      </p>

      <p class="link">
        <input name="link" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input-post" id="link" placeholder="Link"/>
      </p>

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
@endsection
