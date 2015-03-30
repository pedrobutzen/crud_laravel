@extends('template.skeleton')

@section('view')
<div id="content-title">
    <h1 class="title left">Editar Funcionário</h1>
    <hr class="title">
</div>

{{ Form::open(array('url' => 'funcionarios/' . $funcionario->id, 'method' => 'put', 'class' => 'form-padrao')) }}
<div class="left">

</div>
<div class="left">
    {{ Form::label('nome', 'Nome') }}
    {{ Form::text('nome', $funcionario->nome, array('placeholder' => 'Nome')) }}
    {{ $errors->first('nome', '<span class="error">:message</span>') }}

    {{ Form::label('email', 'E-mail') }}
    {{ Form::text('email', $funcionario->email, array('placeholder' => 'E-mail')) }}
    {{ $errors->first('email', '<span class="error">:message</span>') }}

    {{ Form::label('setor', 'Setor') }}
    {{ Form::text('setor', $funcionario->setor, array('placeholder' => 'Setor')) }}
    {{ $errors->first('setor', '<span class="error">:message</span>') }}

    {{ Form::label('cargo', 'Cargo') }}
    {{ Form::text('cargo', $funcionario->cargo, array('placeholder' => 'Cargo')) }}
    {{ $errors->first('cargo', '<span class="error">:message</span>') }}

    <div>
        {{ Form::submit('Editar', array('class' => 'left')) }}
        {{ link_to('/', 'Cancelar', array('class' => 'left btn btn-cancel')) }}
    </div>
</div>
{{ Form::close() }}
@stop