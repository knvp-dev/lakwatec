<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="981gDB7-ftX3n9Oh5guH99WeB9WYMfeZE85VcbfE5wQ" />
        <title>Lakwatec.be</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118882250-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118882250-2');
</script>

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
