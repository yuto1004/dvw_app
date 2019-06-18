@extends('layout')

@section('content')
<main>


<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">

     {{ Form::open() }}
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
     {{ Form::close() }}
    </form>

  </div>
</div>
</main>
@endsection

<!--pictweetより転載

  @section('content')
<div class="contents row">
    <h2>Log in</h2>

    {{ Form::open() }}
        <div class="field">
            <label>Email</label><br>
            <input type="email" name="email" autofocus="autofocus">
        </div>

        <div class="field">
            <label>Password</label><br>
            <input type="password" name="password" autocomplete="off">
        </div>


        <div class="field">
            <label>Remember me</label><br>
            <input type="checkbox" value="1" name="rememver_me">
        </div>


        <div class="actions">
            <input type="submit" value="Log in">
        </div>
    {{ Form::close() }}
</div>
@endsection