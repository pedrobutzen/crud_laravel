@extends('template.skeleton')

@section('view')
<div id="erro-page">
    <div id="erro-desconhecido">Desconhecido</div>
    <p id="descricao-erro">Erro desconhecido encontrado</p>
    <p>{{ link_to('/', 'Clique aqui') }} para ir para home.</p>
</div>
@stop