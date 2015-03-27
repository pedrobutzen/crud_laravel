<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title_page') | CRUD Laravel</title>
    </head>
    <body>
        <div id="view">
            @yield('view')
        </div>
        {{ HTML::style('lib/sumoselect.css') }}
        {{ HTML::script('lib/jquery-2.1.3.min.js') }}
        {{ HTML::script('lib/jquery.sumoselect.min.js') }}

        {{ HTML::style('css/custom.css') }}
        {{ HTML::script('js/custom.js') }}
    </body>
</html>