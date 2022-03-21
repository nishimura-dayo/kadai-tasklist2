@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>ログイン</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Eメール') !!}
                    {!! FOrm::email('email', null , ['class' =>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('ログインする', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            {{-- ユーザ登録ページへのリンク --}}
            <p ckass="mt-2">登録はまだですか？ {!! link_to_route('signup.get', 'ユーザー登録') !!}</p>
        </div>
    </div>
@endsection