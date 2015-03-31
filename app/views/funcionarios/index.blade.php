@extends('template.skeleton')

@section('view')
<div id="content-title">
    <h1 class="title left">Funcionários</h1>
    {{ Form::open(array('url' => '/', 'method' => 'get', 'class' => 'right', 'id' => 'form-search')) }}
    {{ Form::text('filtro', $filtro, array('placeholder' => 'Pesquisa')) }}
    {{ Form::select('col[]', array('nome' => 'Nome', 'email' => 'E-mail', 'setor' => 'Setor', 'cargo' => 'Cargo'), $filter_multiple, array('multiple' => 'true', 'id' => 'filter_multiple')); }}
    {{ Form::button('', array('type' => 'submit', 'class' => 'btn el el-search btn-search', 'title' => 'Pesquisar')) }}
    {{ Form::close() }}
    <!--hr class="title"-->
</div>


@if($funcionarios->getItems())
<table id="list-table">
    <thead>
        <tr>
            <th></th>
            <th><a href="{{ URL::to('?sort=nome&'. $url) }}">Nome</a></th>
            <th><a href="{{ URL::to('?sort=email&'. $url) }}">E-mail</a></th>
            <th><a href="{{ URL::to('?sort=setor&'. $url) }}">Setor</a></th>
            <th><a href="{{ URL::to('?sort=cargo&'. $url) }}">Cargo</a></th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($funcionarios as $funcionario)
        <tr>
            <td id="img-list"><img src="{{ asset($funcionario->foto) }}"/></td>
            <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->email }}</td>
            <td>{{ $funcionario->setor }}</td>
            <td>{{ $funcionario->cargo }}</td>
            <td class="action">
                <a href="{{ URL::to('funcionarios/' . $funcionario->id. '/edit') }}" title="Editar">
                    <i class="el el-edit"></i>
                </a>
            <td class="action">
                {{ Form::open(array('url' => 'funcionarios/' . $funcionario->id, 'method' => 'delete', 'data-confirm' => 'Deseja realmente excluir o funcionário selecionado?')) }}
                {{ Form::button('', array('type' => 'submit', 'class' => 'el el-remove', 'title' => 'Excluir')) }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="right">
    {{ $paginacao }}
    <div>Exibindo de {{ $funcionarios->getFrom() }} até {{ $funcionarios->getTo() }} de {{ $funcionarios->getTotal() }} registros.</div>
</div>
@else
<p class="nenhum-encontrado">Nenhum registro encontrado.</p>
@endif
@stop