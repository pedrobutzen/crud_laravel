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

{{ Form::label('email', 'E-mail') }}
{{ Form::text('email', NULL, array('placeholder' => 'E-mail')) }}

{{ Form::label('setor', 'Setor') }}
{{ Form::text('setor', NULL, array('placeholder' => 'Setor')) }}

{{ Form::label('cargo', 'Cargo') }}
{{ Form::text('cargo', NULL, array('placeholder' => 'Cargo')) }}

{{ Form::submit('Salvar') }}
{{ Form::close() }}

@stop