@extends('template.skeleton')

@section('view')
<div id="content-title">
    <h1 class="title left">Cadastrar Funcionário</h1>
    <hr class="title">
</div>

{{ Form::open(array('url' => 'funcionarios', 'files' => true, 'class' => 'form-padrao' )) }}

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

{{ Form::label('image', 'Foto') }}
{{ Form::file('image') }}
{{ $errors->first('image', '<span class="error">:message</span>') }}

<div>
    {{ Form::submit('Salvar', array('class' => 'left')) }}
    {{ link_to('/', 'Cancelar', array('class' => 'left btn btn-cancel')) }}
</div>
{{ Form::close() }}

@stop