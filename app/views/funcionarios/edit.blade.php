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

{{ Form::label('email', 'E-mail') }}
{{ Form::text('email', $funcionario->email, array('placeholder' => 'E-mail')) }}

{{ Form::label('setor', 'Setor') }}
{{ Form::text('setor', $funcionario->setor, array('placeholder' => 'Setor')) }}

{{ Form::label('cargo', 'Cargo') }}
{{ Form::text('cargo', $funcionario->cargo, array('placeholder' => 'Cargo')) }}

{{ Form::submit('Salvar') }}
{{ Form::close() }}
@stop