<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">        
         <!-- Compiled and minified CSS -->
        <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- CUSTOM CSS -->
        <link href="{{ asset('css/layouts/page-center.css') }}" rel="stylesheet">

        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="{{ asset('js/plugins/prism/prism.css') }}" rel="stylesheet">
        <link href="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet">
        
    
    </head>
    <body class="cyan">
        <div id="login-page" class="row">
            <div class="col s12 z-depth-4 card-panel">
                @yield('content')
            </div>
        </div>
    </body>

    @yield('page-js-files')
    @yield('page-js-script')
</html>