@extends('layouts.app')

@section('content')

    

        <div class="col-7 card bg-info text-white">
            <div class="card-header">
                <h2>タスクID{{ $task->id }}  の編集</h2>
            </div>
        </div></br>
        
    <div class="row">
        <div class="col-7">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status', '進捗状況:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}</br>
                </div>

                {!! Form::submit('更新する', ['class' => 'btn btn-success']) !!}

            {!! Form::close() !!}
            
        </div>
    </div>

@endsection