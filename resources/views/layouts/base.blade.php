<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - Runner calculator</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
      @include('include.navbar')

      <div class="container">
        @yield('content')

      </div>
    </body>
</html>