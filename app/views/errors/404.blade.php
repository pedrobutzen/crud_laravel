@extends('template.skeleton')

@section('view')
<div id="erro-page">
    <div>404</div>
    <p id="descricao-erro">Página não Encontrada</p>
    <p>{{ link_to('/', 'Clique aqui') }} para ir para home.</p>
</div>
@stop