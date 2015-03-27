@extends('template.skeleton')

@section('title_page')
Editar Funcionario
@stop

@section('view')
<h1>Editar Funcionários</h1>

{{ link_to('funcionarios', 'Voltar', array('class' => '')) }}

{{ Form::open(array('url' => 'funcionarios/' . $funcionario->id, 'method' => 'put')) }}

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

{{ Form::submit('Salvar') }}
{{ Form::close() }}
@stop