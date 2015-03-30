<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> {{ $title_page }} | CRUD Laravel</title>
        {{ HTML::style('lib/sumoselect.css') }}
        {{ HTML::style('lib/elusive-icons/css/elusive-icons.min.css') }}
        {{ HTML::script('lib/jquery-2.1.3.min.js') }}
        {{ HTML::script('lib/jquery.sumoselect.min.js') }}

        {{ HTML::style('css/custom.css') }}
        {{ HTML::script('js/custom.js') }}
    </head>
    <body>
        @if(Session::has('message'))
        {{ Session::get('message') }}
        @endif
        <div id="topbar">
            <div id="logo">CRUD Laravel <i class="icon ico-edit"></i></div>
            <div id="content-logado">
                <div id="logado" title="pedrobutzen@outlook.com">
                    Pedro Butzen
                </div>
                <div id="logout" title="Sair">
                    Sair
                </div>
            </div>
        </div>
        <nav>
            {{ link_to('/', 'Listar', array('title' => 'Listar todos os funcionários.')) }}
            {{ link_to('funcionarios/create', 'Novo', array('title' => 'Criar novo funcionário.')) }}
        </nav>
        <div id="view">
            @yield('view')
        </div>
    </body>
</html>