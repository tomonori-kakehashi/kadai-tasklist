@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-9">
        <h2>{{Auth::user()->name.'さんのタスク管理'}}</h2>{{-- ログアウトのボタン --}}
    </div>
    
    
        <button type="button" class="col-sm-2 btn btn-danger"> {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'nav-link']) !!}</button>
    
</div>
    </br>
    </br>
    

<div class="container">

    {{-- タスクの登録 --}}
     
    <div class="row">    
        <div class="offset-md-0.5 col-5">
            
            <div class="card bg-info text-white">
                <div class="card-header">
                    <h4>タスクの登録</h4>
                </div>
            </div>
        
            @include('tasks.form')
        </div>
    

    {{-- タスク一覧 --}}

        <div class="col-6">
            
            <div class="card bg-info text-white">
                <div class="card-header">
                    <h4>タスク一覧</h4>
                </div>
            </div>
        

            @if (count($tasks) > 0)
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>タスク</th>
                        <th>進捗状況</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach ($tasks as $task)
                
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->status }}</td>
                    </tr>
                
                @endforeach
                </tbody>
            </table>
        
            @endif
    
            {{ $tasks->links() }}
        </div>
    </div>
    
</div>
@endsection