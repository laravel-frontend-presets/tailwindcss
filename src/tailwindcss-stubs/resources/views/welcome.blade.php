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
<body class="bg-brand-lightest font-sans font-normal">
    <div class="flex flex-col">
        @if(Route::has('login'))
            <div class="absolute pin-t pin-r mt-4 mr-4">
                @auth
                    <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase">Home</a>
                @else
                    <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase pr-6">Login</a>
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase">Register</a>
                @endauth
            </div>
        @endif

        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6">
                        {{ config('app.name', 'Laravel') }}
                    </h1>
                    <ul class="list-reset">
                        <li class="inline pr-8">
                            <a href="https://laravel.com/docs" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Documentation">Documentation</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://laracasts.com" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Laracasts">Laracasts</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://laravel-news.com" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="News">News</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://forge.laravel.com" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Forge">Forge</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://github.com/laravel/laravel" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="GitHub">GitHub</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
