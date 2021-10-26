<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <meta name="csrf-token" value="{{ csrf_token() }}" />
    </head>
    <body>
        <header class="w-auto text-center text-primary bg-light"><h1>Learn Vue Js</h1></header>
        <content>
            <div id="app">
                <example-component></example-component>
            </div>
        </content>
        <footer class="w-auto text-center text-primary bg-light mt-5">@copyright KubiKubo</footer>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
