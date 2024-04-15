@extends('layouts.main')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project FUMO</title>

</head>
<body>
<div class="main-wrapper">
    <header class="header">
        <div class="header__navbar">
            <div class="navbar__left">
                <a href="#" class="navbar__logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
            </div>
            <nav class="header__menu menu hidden-mobile">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a class="menu__link" href="#">About us</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="#"></a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="#">For Kids</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="#">For Anyone</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="#">For No-one</a>
                    </li>
                </ul>
            </nav>
            <div class="navbar__right">
                <a href="{{ url('/signup') }}" class="navbar__button">Sign Up</a>
            </div>
        </div>
    </header>
    <main>
        <div class="main-content">
            <h1>Welcome to Project FUMO</h1>
            <p>This is a simple website project.</p>
            <p>Explore our pages:</p>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
    </main>
    @yield('footer')
    <footer>
        <p>&copy; {{ date('Y') }} Project FUMO. All rights reserved.</p>
    </footer>
</div>
</body>
</html>
