<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    <!--    подключил библиотеку через js, чтобы вставить иконку user-->
    <script src="https://kit.fontawesome.com/4dc3842015.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>
<body>

<x-errors/>
<x-message/>

@include('layout.header')

<main style="width: 802px; overflow: auto; height: 400px">

    @yield('content')

</main>
</body>
</html>
