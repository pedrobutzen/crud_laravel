@extends('template.skeleton')

@section('view')
<div id="erro-page">
    <div>500</div>
    <p id="descricao-erro">Erro Interno do Servidor</p>
    <p>{{ link_to('/', 'Clique aqui') }} para ir para home.</p>
</div>
@stop