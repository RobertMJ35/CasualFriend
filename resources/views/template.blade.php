<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="/css/style.css" rel="stylesheet">
</head>
    <div class="navbar sticky-top">
        <a href="/" style="padding-left: 170px;"><img src="{{ asset('image/Icon.png') }}" alt="" width="170"></a>
        <div style="padding-right: 100px;">
            @auth
                <a class="nav-details {{ (Request::is("home")? "active" : Request::is("search*")) ? "active" : "" }}" href="/home">@lang('navbar.home')</a>
                <a class="nav-details {{ Request::is("chat")? "active" : "" }}" href="/chat">@lang('navbar.chat')</a>
                <a class="nav-details {{ Request::is("friend")? "active" : "" }}" href="/friend">@lang('navbar.friend')</a>
                <a class="nav-details {{ Request::is("avatar")? "active" : "" }}" href="/avatar">@lang('navbar.avatar')</a>
                <a class="nav-details {{ Request::is("setting")? "active" : "" }}" href="/setting">@lang('navbar.setting')</a>
                <a class="outline-button" href="/logout">@lang('navbar.logout')</a>
            @else
                <a class="nav-details {{ Request::is("register")? "active" : (Request::is("register/profile") ? "active" : "") }}" href="/register">@lang('navbar.register')</a>
                <button class="nav-details" id="lang-button" style="background-color: var(--white), 0; border: none">@lang('navbar.change-language')</button>
                <a class="outline-button" href="/login">@lang('navbar.login')</a>
            @endauth
        </div>
    </div>
    <body style="background-color: var(--sLight)">
        @include('sweetalert::alert')

        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/js/script.js"></script>
    </body>
</html>
