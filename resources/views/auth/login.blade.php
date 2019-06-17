@extends('layout')

@section('content')
<main>


<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">


      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>

      <p class="password">
        <input name="password" type="password" class="validate[required,length[6,300]] feedback-input" id="password" placeholder="Password"/>
      </p>

      <div class="field">
            <input type="checkbox" value="1" name="rememver_me">
            <label>Rememver me</label>
        </div>

      <div class="submit">
        <input type="submit" value="Sign in" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>

  </div>
</div>
</main>
@endsection
