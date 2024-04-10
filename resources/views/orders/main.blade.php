@extends('layouts.main')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project FUMO</title>
    <style>
        /* Вбудований CSS для прикладу стилізації */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .main-wrapper {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .navbar__links ul {
            list-style-type: none;
            padding: 0;
        }
        .navbar__links ul li {
            display: inline;
            margin-right: 10px;
        }
        .navbar__links ul li a {
            color: #fff;
            text-decoration: none;
        }
        .main-content {
            padding: 20px;
        }
        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #f8f8f8;
        }
    </style>
</head>
<body>
@yield('header')
<div class="main-wrapper">
    <header class="header">
        <div class="header__navbar">
            <div class="navbar__left">
                <a href="#" class="navbar__logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
            </div>
            <div class="navbar__links">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
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
