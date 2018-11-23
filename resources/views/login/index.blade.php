@include('layouts.header')
<div class="container login-container">
    <div class="bg-gradient-secondary br-top pt-1 mb-3 shadow-outer">
        <div class="log-header text-center p-2 br-top bg-white">
                <img src='storage/images/header-logo.png' style="width:20%;height:20%;">
                <h6 class="mx-2">log</h6>
        </div>
        <div class="log-body p-3 bg-white bt b-black-05">
            {{ Form::open() }}
            <div class="form-group py-0 mb-0">
                {{ Form::label('username', 'UserID:')}}
                {{ Form::text('user', old('user', ''), ['class' => ['input', 'my-1']]) }}
            </div>
            <div class="form-group py-0 mb-0">
                {{ Form::label('password', 'Password:')}}
                {{ Form::password('password', ['class' => ['input', 'my-1']]) }}
            </div>
        </div>
        <div class="log-footer bg-white br-bottom px-3 pb-4 mx-auto">
            <div class="row justify-content-center">
                {{ Form::submit('Login', ['class' => 'button-secondary']) }}
            </div>
            {{ Form::close() }}
            <div class="text-center">
            </div>
        </div>
    </div>
    <div class="text-right">
        <span class="small">
            <a href="/resetpassword">パスワードを忘れ</a>
        </span>
    </div>
</div>
