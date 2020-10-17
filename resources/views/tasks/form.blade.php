</br>{!! Form::open(['route' => 'tasks.store']) !!}
    <div class="form-group">
        {!! Form::label('content', 'タスク ： ') !!}
        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '1']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', '進捗状況 ： ') !!}
        {!! Form::textarea('status', old('content'), ['class' => 'form-control', 'rows' => '1']) !!}</br>
    </div>
    <div class="form-group">    
        {!! Form::submit('登録する', ['class' => 'btn btn-success btn-block']) !!}
    </div>
{!! Form::close() !!}</br></br>