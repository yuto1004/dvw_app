@extends('layout')

@section('content')
<div class="contents row">
    <h2>ログイン</h2>

    {{ Form::open() }}
        <div class="field">
            <label>Eメール</label><br>
            <input type="email" name="email" autofocus="autofocus">
        </div>

        <div class="field">
            <label>パスワード</label><br>
            <input type="password" name="password" autocomplete="off">
        </div>


        <div class="field">
            <label>パスワードを記憶する</label><br>
            <input type="checkbox" value="1" name="rememver_me">
        </div>


        <div class="actions">
            <input type="submit" value="Log in">
        </div>
    {{ Form::close() }}
</div>
@endsection
