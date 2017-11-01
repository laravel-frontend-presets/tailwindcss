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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <article class="vh-100 dt w-100">
        @if (Route::has('login'))
            <div class="absolute top-1 right-1 sans-serif">
                @auth
                    <a class="link dim gray f6 f6-ns dib mr3" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="link dim gray f6 f6-ns dib mr3" href="{{ route('login') }}">Login</a>
                    <a class="link dim gray f6 f6-ns dib mr3" href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="dtc v-mid tc b--mid-grey ph3 ph4-1 sans-serif">
            <h1 class="f1 f2-m f-subheadline-1 fw2 tc">
                Laravel
            </h1>
            <a class="link dim gray f6 f5-ns dib mr3" href="https://laravel.com/docs" title="Documentation">Documentation</a>
            <a class="link dim gray f6 f5-ns dib mr3" href="https://laracasts.com" title="Laracasts">Laracasts</a>
            <a class="link dim gray f6 f5-ns dib mr3" href="https://laravel-news.com" title="News">News</a>
            <a class="link dim gray f6 f5-ns dib mr3" href="https://forge.laravel.com" title="Forge">Forge</a>
            <a class="link dim gray f6 f5-ns dib mr3" href="https://github.com/laravel/laravel" title="GitHub">GitHub</a>
        </div>
    </article>
</body>
</html>
