<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs Peminjaman Gedung Setda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 20px 50px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            text-decoration: none;
            color: #636b6f;
            margin-left: 20px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .navbar-left a {
            font-weight: bold;
            font-size: 24px;
            color: #000;
        }
        .hero {
            position: relative;
            text-align: center;
            color: white;
        }
        .hero img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            filter: brightness(0.7);
        }
        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .hero-text h1 {
            font-size: 3em;
            margin: 0;
        }
        .hero-text p {
            font-size: 1.5em;
        }
    </style>
</head>
<body class="antialiased">
    {{-- <div class="navbar">
        <div class="navbar-left">
            <a href="#">SIPEDUNG</a>
        </div>
        <div class="navbar-right">
            <a href="#">Dashboard</a>
            <a href="/profilenav">Profile</a>
            <a href="#">Contact</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div> --}}
    <x-navbar></x-navbar>
    <div class="hero">
        <img src="{{ asset('images/gedung_setda.jpeg') }}" alt="Background Image">
        <div class="hero-text">
            <h1>Selamat Datang di SIPEDUNG</h1>
            <p>Butuh Pinjam Gedung Siap Pakai di Setda? SIPEDUNG Aja</p>
        </div>
    </div>
</body>
</html>
