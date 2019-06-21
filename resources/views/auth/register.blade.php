@extends('layout')

@section('content')
  <main>
    {{ Form::open() }}
      <div id="form-main">
        <div id="form-div">
          <div class="name">
            <input type='text' name="name" id="name" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" autofocus="autofocus" placeholder="Name">
          </div>
          <div class="email">
            <input type="email" name="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email">
          </div>
          <div class="password">
            @if (false)
              <em>(6 characters minimum)</em>
            @endif
            <input type="password" name="password" autocomplete="off" class="validate[required,length[6,300]] feedback-input" id="password" placeholder="Password">
          </div>
          <div class="password_confirmation">
            <input type="password" name="password_confirmation" autocomplete="off" class="validate[required,length[6,300]] feedback-input" id="password_confirmation" placeholder="Password confirmation">
          </div>
          <div class="submit">
            <input type="submit" value="Sign up" id="button-blue">
            <div class="ease"></div>
          </div>
        </div>
      </div>
    {{ Form::close() }}
  </main>
@endsection