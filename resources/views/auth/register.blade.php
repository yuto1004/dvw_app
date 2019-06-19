@extends('layout')

@section('content')
<main>
<!-- div id="form-main">
  <div id="form-div">
    {{ Form::open() }}
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
      {{ Form::close() }}
</div -->
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

<!--picTweetより転載
@section('content')
<div class="contents row">
    <h2>Sign up</h2>

    {{ Form::open() }}
        <div class="field">
            <label>Nickname <em>(6 characters maximum)</em><label><br>
            <input type='text' name="name" autofocus="autofocus">
        </div>

        <div class="field">
            <label>Email</label>
            <input type="email" name="email">
        </div>

        <div class="field">
            <label>Password</label>
            @if (false)
                <em>(6 characters minimum)</em>
            @endif
            <br />
            <input type="password" name="password" autocomplete="off">
        </div>

        <div class="field">
            <label>password confirmation</label><br>
            <input type="password" name="password_confirmation" autocomplete="off">
        </div>

        <div class="actions">
            <input type="submit" value="Sign up">
        </div>
    {{ Form::close() }}
</div>
@endsection
-->