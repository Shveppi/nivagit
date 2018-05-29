<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Главная')</title>

        {{Html::script(asset('//elres.kaleidoscope48.ru/assets/sb-admin/vendor/jquery/jquery.min.js'))}}
        {{Html::script(asset('bootstrap/js/bootstrap.js'))}}
        {{Html::style('bootstrap/css/bootstrap.css')}}
        {{Html::script(asset('js/script.js'))}}
        {{Html::style(asset('css/style_input.css'))}}
        {{Html::style(asset('//use.fontawesome.com/releases/v5.0.13/css/all.css'))}}
        {{Html::style(asset('css/style.css'))}}


    </head>
    <body>

        @include('assets.menu')

        <div class="container">
            
            <h2>@yield('title', 'Главная')</h2>

            <br />

            @include('errors.list')
        
            @yield('content')

            
        </div>
    </body>
</html>
