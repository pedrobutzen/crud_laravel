<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> {{ $title_page }} | CRUD Laravel</title>
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
        {{ HTML::style('lib/jquery.sumoselect/sumoselect.css') }}
        {{ HTML::style('lib/elusive-icons/css/elusive-icons.min.css') }}
        {{ HTML::script('lib/jquery-2.1.3.min.js') }}
        {{ HTML::script('lib/jquery.sumoselect/jquery.sumoselect.min.js') }}

        {{ HTML::style('css/custom.css') }}
        {{ HTML::script('js/custom.js') }}
    </head>
    <body>
        @if(Session::has('message'))
        <div id="alert"><div id="alert_msg">{{ Session::get('message') }}</div></div>
        <script type="text/javascript">
            setTimeout(function() {
                $('#alert').fadeOut();
            }, 5000);
        </script>
        @endif

        <div id="topbar">
            <div id="logo">CRUD Laravel <i class="icon ico-edit"></i></div>
            <div id="content-logado">
                <div id="logado" title="{{ Auth::user()->email }}">
                    {{ Auth::user()->nome }}
                </div>
                <div id="logout">
                    {{ link_to('logout', 'Logout', array('title' => 'Sair.')) }}
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