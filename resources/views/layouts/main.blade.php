<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<header>
    VMware guide

    @guest()
        <a href="{{ route('login') }}">Войти</a>
    @endguest

    @auth()
        <a href="{{ route('logout') }}">Выйти</a>
    @endauth

    <hr>
</header>

@yield('content')

<footer>
    <hr>
    Все права защищены.
</footer>

</body>
</html>

