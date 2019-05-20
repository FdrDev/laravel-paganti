<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- ADD My STYLE -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- ADD My STYLE -->
        <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>




      @include ('element.header')
      @yield ('content')
      @include ('element.footer')






    </body>
</html>
