<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lighter h-screen">
        <div class="container mx-auto h-full">
            <div class="flex flex-col justify-around h-full">
                <div class="absolute pin-t pin-r">
                    @if (Route::has('login'))
                        <div class="pin-t pin-r mt-3 mr-4">
                            @auth
                                <a class="no-underline hover:underline text-blue-dark" href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="no-underline hover:underline text-blue-dark mr-4" href="{{ url('login') }}">Login</a>
                                <a class="no-underline hover:underline text-blue-dark" href="{{ url('register') }}">Register</a>
                            @endauth
                        </div>
                    @endif
                </div>
                <div class="text-center">
                    <h1 class="font-sans text-grey-darker text-5xl font-medium mb-4">
                        {{ config('app.name', 'Laravel') }}
                    </h1>
                    <ul class="list-reset">
                        <li class="inline pr-4">
                            <a href="https://laravel.com/docs" class="no-underline hover:underline text-blue-dark" title="Documentation">Documentation</a>
                        </li>
                        <li class="inline pr-4">
                            <a href="https://laracasts.com" class="no-underline hover:underline text-blue-dark" title="Laracasts">Laracasts</a>
                        </li>
                        <li class="inline pr-4">
                            <a href="https://laravel-news.com" class="no-underline hover:underline text-blue-dark" title="News">News</a>
                        </li>
                        <li class="inline pr-4">
                            <a href="https://forge.laravel.com" class="no-underline hover:underline text-blue-dark" title="Forge">Forge</a>
                        </li>
                        <li class="inline pr-4">
                            <a href="https://github.com/laravel/laravel" class="no-underline hover:underline text-blue-dark" title="GitHub">GitHub</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
