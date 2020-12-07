<!doctype html>
<html>
<head>
    <title>SiSMaNo - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
    integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #004472;
            color: white;
            text-align: center;
            padding-top: 2vh;
        }

    </style>
    @stack('head')
</head>
<body>
@include('layouts.navbar')
    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">
        <h4>Alunos:</h4>
        <p>Lucas M. Moreira - RGM 17014131</p>
        <p>Pablo B. Moraes - RGM 16932935</p>
        <p>Marcos Flávio de Souza - RGM 17055598</p>
    </div>
    @stack('scripts')
</body>
</html>
