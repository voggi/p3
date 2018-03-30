<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Who Owes What?</title>

        {{--  Bootstrap CSS --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        @stack('head')
    </head>
    <body>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                @include('modules.header')
            </div>

            <div class="row mt-5 justify-content-center">
                @yield('content')
            </div>
            
            <div class="row mt-5 justify-content-center">
                @include('modules.footer')
            </div>
        </div>

        @stack('body')
    </body>
</html>
