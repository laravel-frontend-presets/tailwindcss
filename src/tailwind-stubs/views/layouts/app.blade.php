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
    <div id="app">
        <nav class="db dt-l w-100 border-box pa3 ph5-l bg-almost bg-light-gray">
            <a class="db dtc-l v-mid mid-gray link dim w-100 w-25-l tc tl-l mb2 mb0-l tracked ttu" href="#" title="Home">
                {{ config('app.name') }}
            </a>
            <div class="db dtc-l v-mid w-100 w-75-l tc tr-l">
                @guest
                    <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l tracked" href="{{ url('/login') }}">Login</a>
                    <a class="link dim dark-gray f6 f5-l dib tracked" href="{{ url('/register') }}">Register</a>
                @else
                    <a href="{{ route('logout') }}"
                        class="link dim dark-gray f6 f5-l dib mr3 mr4-l tracked"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
