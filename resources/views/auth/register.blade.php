@extends('layout')

@section('content')
<div class="contents row">
    <h2>新規登録</h2>

    {{ Form::open() }}
        <div class="field">
            <label>ニックネーム <em>(6文字以内)</em><label><br>
            <input type='text' name="name" autofocus="autofocus">
        </div>

        <div class="field">
            <label>Eメール</label>
            <input type="email" name="email">
        </div>

        <div class="field">
            <label>パスワード</label>
            @if (false)
                <em>(6文字以上で設定してください)</em>
            @endif
            <br />
            <input type="password" name="password" autocomplete="off">
        </div>

        <div class="field">
            <label>パスワード確認<em>(コピーしないで入力してください)</em></label><br>
            <input type="password" name="password_confirmation" autocomplete="off">
        </div>

        <div class="actions">
            <input type="submit" value="Sign up">
        </div>
    {{ Form::close() }}
</div>
@endsection
