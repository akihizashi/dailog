@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="bg-gradient-secondary br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                <div class="form-inline">
                    {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                    <div class="col-sm-2 col-md-1">
                        <div class="form-inline text-right">
                            <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                            <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-purple br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                    {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
            </div>
        </div>
        <div class="bg-blue br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-green br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-light-orange br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-red br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-purple br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-blue br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-green br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-light-orange br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-red br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-purple br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-blue br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-green br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="bg-light-orange br-top pt-1 mb-3 shadow-outer">
            <div class="log-header form-inline p-2 br-top bg-white">
                <img class='br-100' src='http://placehold.it/40x40.png' alt='' />
                <h6 class="mx-2">タイトル</h6>
            </div>
            <div class="log-body p-3 bg-white bt b-black-05">
                Laravelフレームワークを動作させるには多少のシステム要件があります。もちろん、Laravel Homestead仮想マシンでは、要求が全て満たされています。ですから、Laravelのローカル開発環境としてHomesteadを活用されることを強くおすすめします。
                しかし、Homesteadを使用しない場合は、以下の要件を満たす必要があります。
            </div>
            <div class="log-footer bg-white px-3 pb-2">
                {{ Form::open() }}
                    <div class="form-inline">
                        {{ Form::text('comment', old('comment', ''), ['class' => ['input', 'col-sm-10', 'col-md-11'], 'placeholder' => 'コメントをください。']) }}
                        <div class="col-sm-2 col-md-1">
                            <div class="form-inline text-right">
                                <a href="#"><ion-icon class="ion-general mr-2" name="ios-images" size="small"></ion-icon></a>
                                <a href=""><ion-icon class="ion-general " name="ios-send" size="small"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
