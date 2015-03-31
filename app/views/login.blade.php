<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Login | CRUD Laravel</title>
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
        {{ HTML::style('css/custom.css') }}
        {{ HTML::script('lib/jquery-2.1.3.min.js') }}
    </head>
    <body id="body-login">
        @if(Session::has('message'))
        <div id="alert"><div id="alert_msg">{{ Session::get('message') }}</div></div>
        <script type="text/javascript">
            setTimeout(function() {
                $('#alert').fadeOut();
            }, 5000);
        </script>
        @endif
        <div id="content-login">
            <div id="top-title">
                <div><span>Login</span> | CRUD Laravel</div>
            </div>
            {{ Form::open(array('url' => 'login', 'method' => 'post', 'id' => 'form-login')) }}

            {{Form::text('email', null,array('class' => '', 'placeholder' => 'E-mail'))}}
            {{ $errors->first('email', '<span class="error">:message</span>') }}

            {{Form::password('password',array('class' => '', 'placeholder' => 'Senha'))}}
            {{ $errors->first('password', '<span class="error">:message</span>') }}

            {{Form::submit('Login', array('class' => ''))}}

            {{ Form::close() }}
            <div class="clear"></div>
        </div>
    </body>
</html>
