@extends('template.skeleton')

@section('view')
<div id="erro-page">
    <div>403</div>
    <p id="descricao-erro">Permissão negada</p>
    <p>{{ link_to('/', 'Clique aqui') }} para ir para home.</p>
</div>
@stop