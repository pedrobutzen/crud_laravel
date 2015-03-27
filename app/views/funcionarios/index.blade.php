@extends('template.skeleton')

@section('title_page')
Funcionario
@stop

@section('view')
<h1>Funcionários</h1>

{{ link_to('funcionarios/create', 'Novo', array('class' => '')) }}

{{ Form::open(array('url' => 'funcionarios', 'method' => 'get')) }}
{{ Form::text('filtro', $filtro, array('placeholder' => 'Pesquisa')) }}
{{ Form::select('col[]', array('nome' => 'Nome', 'email' => 'E-mail', 'setor' => 'Setor', 'cargo' => 'Cargo'), $filter_multiple, array('multiple' => 'true', 'id' => 'filter_multiple')); }}
{{ Form::button('Pesquisar', array('type' => 'submit', 'class' => 'btn btn_search')) }}
{{ Form::close() }}

<table>
    <thead>
        <tr>
            <th><a href="{{ URL::to('funcionarios?sort=nome&'. $url) }}">Nome</a></th>
            <th><a href="{{ URL::to('funcionarios?sort=email&'. $url) }}">E-mail</a></th>
            <th><a href="{{ URL::to('funcionarios?sort=setor&'. $url) }}">Setor</a></th>
            <th><a href="{{ URL::to('funcionarios?sort=cargo&'. $url) }}">Cargo</a></th>
            <th><a href="{{ URL::to('funcionarios?sort=foto&'. $url) }}">Foto</a></th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($funcionarios as $funcionario)
        <tr>
            <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->email }}</td>
            <td>{{ $funcionario->setor }}</td>
            <td>{{ $funcionario->cargo }}</td>
            <td>{{ $funcionario->foto }}</td>
            <td>{{ link_to('funcionarios/' . $funcionario->id . '/edit', 'Editar', array('class' => 'ico ico_edit', 'title' => 'Editar')) }}</td>
            <td>
                {{ Form::open(array('url' => 'funcionarios/' . $funcionario->id, 'method' => 'delete', 'data-confirm' => 'Deseja realmente excluir o funcionário selecionado?')) }}
                {{ Form::button('Apagar', array('type' => 'submit', 'class' => '', 'title' => 'Excluir')) }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div>
    {{ $paginacao }}
</div>
@stop