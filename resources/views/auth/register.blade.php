@extends('layout')

@section('content')
<main>
<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">

      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>

      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>

      <p class="password">
        <input name="password" type="password" class="validate[required,length[6,300]] feedback-input" id="password" placeholder="Password"/>
      </p>

      <p class="password_confirmation">
        <input name="password_confirmation" type="password" class="validate[required,length[6,300]] feedback-input" id="password_confirmation" placeholder="Password confirmation"/>
      </p>

      <div class="submit">
        <input type="submit" value="Sign up" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
</div>
</main>
@endsection
