<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Todo-list💻🖥💾</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('tasksPage') ? 'active' : 'nic' }}" aria-current="page" href="{{ route('tasksPage') }}" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('createTask') ? 'active' : '' }}" href="{{ route('createTask') }}">Create task</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About us</a>
                </li>
            </ul>
            <div class="ml-auto">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link">{{ auth()->user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                    <a  type="submit"class="nav-link" href="{{ route('logout')}}">Log out</a>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('login', "*") }}" class="nav-link {{ Route::is('login') ? 'active' : '' }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link {{ Route::is('register') ? 'active' : '' }}">Register</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>
