<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lakwatec.be</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div id="app">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
