@extends('template.skeleton')

@section('title_page')
Funcionario
@stop

@section('view')
<h1>Funcionários</h1>

{{ Form::open(array('url' => 'funcionarios', 'method' => 'get')) }}
{{ Form::text('filtro', $filtro, array('placeholder' => 'Pesquisa')) }}
{{ Form::select('col[]', array('nome' => 'Nome', 'email' => 'E-mail', 'setor' => 'Setor', 'cargo' => 'Cargo'), $filter_multiple, array('multiple' => 'true', 'id' => 'filter_multiple')); }}
{{ Form::button('Pesquisar', array('type' => 'submit', 'class' => 'btn btn_search')) }}
{{ Form::close() }}

<table>
    <thead>
        <tr>
            <th><a href="{{ URL::to('funcionarios?sort=nome&'. $order_url) }}">Nome</a></th>
            <th><a href="{{ URL::to('funcionarios?sort=email&'. $order_url) }}">E-mail</a></th>
            <th><a href="{{ URL::to('funcionarios?sort=setor&'. $order_url) }}">Setor</a></th>
            <th><a href="{{ URL::to('funcionarios?sort=cargo&'. $order_url) }}">Cargo</a></th>
            <th><a href="{{ URL::to('funcionarios?sort=foto&'. $order_url) }}">Foto</a></th>
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
        </tr>
        @endforeach
    </tbody>
</table>
<div>
    {{ $paginacao }}
</div>
@stop