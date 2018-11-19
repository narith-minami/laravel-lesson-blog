<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
      <div id="app" class="contatiner">
         @yield('content')
      </div>
      <script src=" {{ mix('js/app.js') }} "></script>
    </body>
</html>
