@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                    
                </div>
            </aside>
            <div class="col-sm-8">
                {{-- タスクフォーム --}}
                @include('tasks.form')
                {{-- タスク一覧 --}}
                @include('tasks.tasks')
            </div>
        </div>
    @else
        <div class="center jumbotron bg-info">
            <div class="text-center text-white ">
                <h1>タスクリストへようこそ</h1></br>
                {{-- ユーザ登録ページ、ログインページへのリンク --}}
                {!! link_to_route('signup.get', 'ユーザ登録', [], ['class' => 'btn btn-lg btn-light']) !!}</br></br></br>
                {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-light']) !!}
            </div>
        </div>
    @endif
@endsection