 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('header-title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header>
    <div class="inner">
        <span class="logo"> itProger App
            <nav>
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li><a href="{{route('about')}}">Про нас</a></li>
                    <li><a href="{{route('contact')}}">Контакты</a></li>
                    <li><a href="{{route('posts')}}">Посты</a></li>
                </ul>
            </nav>
        </span>

    </div>
</header>
<div class="content">
    @yield('content')
</div>
<footer>
    Все права защищены
</footer>
</body>
</html>
