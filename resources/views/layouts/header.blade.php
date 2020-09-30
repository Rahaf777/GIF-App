<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GIF Browsing App</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <!--header -->
    <header id="header">

        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="brand">
                    <h1><a href="/"><span>GIF</span> App</a></h1>
                </div>
                @if (Route::has('login'))
                <nav id="nav-menu-container">
                    @auth
                    <ul class="nav-menu sf-js-enabled sf-arrows">
                        <li><a href="/history">History</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>
                    @else
                    <ul class="nav-menu sf-js-enabled sf-arrows">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>

                        @endif
                        @endauth
                        @endif
                    </ul>
                </nav>

            </div>
        </div>
    </header>