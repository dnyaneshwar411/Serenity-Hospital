<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serenity</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('img/icon.jpg') }}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- @vite('public/css/style.css', 'public/css/testimonials.css') --}}
    @yield('head')

</head>

<body>
    <nav class="">
        <div class="main_container flex">
            <a href="{{ url('/') }}">
                <div class="branding flex">
                    <img src="{{ asset('img/icon.jpg') }}" alt="">
                    <h1>SERENITY</h1>
                </div>
            </a>
            <ul class="flex">
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li><a href="{{ url('/about') }}">ABOUT</a></li>
                <li><a href="{{ url('/contact') }}">CONTACT</a></li>
                {{-- <li><a href="{{ url('/services') }}">SERVICES</a></li> --}}
                <li><a href="{{ url('/privacy-policy') }}">POLICY PRIVACY</a></li>
            </ul>
            <i class="fa-solid fa-bars"></i>
            @if (auth()->user())
                <a href="{{ url('/user/profile') }}"><i class="fa-solid fa-user"
                        style="font-size: 1.2rem; text-align: center; line-height: 1.8rem; height: 2rem; aspect-ratio: 1/1; border-radius: 50%; border: 2px solid black;"></i></a>
            @else
                <a href="{{ url('/register') }}"><button>Sign Up</button></a>
            @endif
        </div>
    </nav>
