<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<header>
    <a href="/">Главная страница</a>
    <a href="{{ route('categories.index') }}">Категории</a>
    <a href="{{ route('auth') }}">Регистрация</a>
    <a href="/create">Создать новость</a>
    <a href="{{ route('aggregator.index') }}">Агрегатор</a>
    <hr>
</header>
@yield('name')
@yield('content')
<footer>
    <hr>
    <a href="{{ route('feedback.index') }}">Обратная связь</a>
</footer>
</body>
</html>
