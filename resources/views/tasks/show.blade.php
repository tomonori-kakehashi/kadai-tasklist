@extends('layouts.app')

@section('content')

    <div class="col-7 card bg-info text-white">
            <div class="card-header">
                <h2>タスクID{{ $task->id }}  の詳細</h2>
            </div>
    </div></br>

    <table class="col-7 table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>進捗状況</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table></br>
<div class="row">
    <div class=offset-md-1 col-2>
        {{-- メッセージ編集ページへのリンク --}}
        {!! link_to_route('tasks.edit', 'タスクを編集', ['task' => $task->id], ['class' => 'btn btn-success']) !!}
    </div>
    
    <div class=col-2>
        {{-- メッセージ削除フォーム --}}
        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('タスクを削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection