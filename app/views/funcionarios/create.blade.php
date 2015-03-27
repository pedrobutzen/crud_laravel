@extends('template.skeleton')

@section('title_page')
Cadastrar Funcionario
@stop

@section('view')
<h1>Cadastrar Funcionários</h1>

{{ link_to('funcionarios', 'Voltar', array('class' => '')) }}

{{ Form::open(array('url' => 'funcionarios')) }}

{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome', NULL, array('placeholder' => 'Nome')) }}
{{ $errors->first('nome', '<span class="error">:message</span>') }}

{{ Form::label('email', 'E-mail') }}
{{ Form::text('email', NULL, array('placeholder' => 'E-mail')) }}
{{ $errors->first('email', '<span class="error">:message</span>') }}

{{ Form::label('setor', 'Setor') }}
{{ Form::text('setor', NULL, array('placeholder' => 'Setor')) }}
{{ $errors->first('setor', '<span class="error">:message</span>') }}

{{ Form::label('cargo', 'Cargo') }}
{{ Form::text('cargo', NULL, array('placeholder' => 'Cargo')) }}
{{ $errors->first('cargo', '<span class="error">:message</span>') }}

{{ Form::submit('Salvar') }}
{{ Form::close() }}

@stop