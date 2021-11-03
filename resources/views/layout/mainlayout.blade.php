<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;600;800&display=swap" rel="stylesheet">
    <title>@yield("title")</title>
</head>
<body class="bg-dark text-white">
    <style>
        body {
            background: url(image/bg.jpg) fixed center no-repeat;
            background-size: cover;
            font-family: 'Exo 2', sans-serif;
            }
        </style>
        </body>
    @include('layout.navigation')
    <div class="container pt-2">
      <h1>@yield('pagetitle')</h1>
      @yield('main_content')
    </div>
    @include('layout.footer')
</html>