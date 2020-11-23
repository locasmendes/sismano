<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SiSMaNo</title>
    <link rel="stylesheet" href="http://sismano.herokuapp.com/css/app.css">
    @stack('styles')
</head>
<body>
@yield('body')
<script src="http://sismano.herokuapp.com/js/app.js"></script>
@stack('scripts')
</body>
</html>
