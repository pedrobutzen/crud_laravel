<h1>Funcionários</h1>

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