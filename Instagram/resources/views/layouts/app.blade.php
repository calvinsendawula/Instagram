<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="padding: 0px 200px;">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <!-- <div><img src="/svg/freeCodeCampLogo.svg" style="height: 20px; padding-right: 15px; border-right: 2px solid #333;"></div> -->
                    <!-- <div><svg xmlns="http://www.w3.org/2000/svg" width="132.004" height="132" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="b"><stop offset="0" stop-color="#3771c8"/><stop stop-color="#3771c8" offset=".128"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></linearGradient><linearGradient id="a"><stop offset="0" stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></linearGradient><radialGradient id="c" cx="158.429" cy="578.088" r="65" xlink:href="#a" gradientUnits="userSpaceOnUse" gradientTransform="matrix(0 -1.98198 1.8439 0 -1031.402 454.004)" fx="158.429" fy="578.088"/><radialGradient id="d" cx="147.694" cy="473.455" r="65" xlink:href="#b" gradientUnits="userSpaceOnUse" gradientTransform="matrix(.17394 .86872 -3.5818 .71718 1648.348 -458.493)" fx="147.694" fy="473.455"/></defs><path fill="url(#c)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"/><path fill="url(#d)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"/><path fill="#fff" d="M66.004 18c-13.036 0-14.672.057-19.792.29-5.11.234-8.598 1.043-11.65 2.23-3.157 1.226-5.835 2.866-8.503 5.535-2.67 2.668-4.31 5.346-5.54 8.502-1.19 3.053-2 6.542-2.23 11.65C18.06 51.327 18 52.964 18 66s.058 14.667.29 19.787c.235 5.11 1.044 8.598 2.23 11.65 1.227 3.157 2.867 5.835 5.536 8.503 2.667 2.67 5.345 4.314 8.5 5.54 3.054 1.187 6.543 1.996 11.652 2.23 5.12.233 6.755.29 19.79.29 13.037 0 14.668-.057 19.788-.29 5.11-.234 8.602-1.043 11.656-2.23 3.156-1.226 5.83-2.87 8.497-5.54 2.67-2.668 4.31-5.346 5.54-8.502 1.18-3.053 1.99-6.542 2.23-11.65.23-5.12.29-6.752.29-19.788 0-13.036-.06-14.672-.29-19.792-.24-5.11-1.05-8.598-2.23-11.65-1.23-3.157-2.87-5.835-5.54-8.503-2.67-2.67-5.34-4.31-8.5-5.535-3.06-1.187-6.55-1.996-11.66-2.23-5.12-.233-6.75-.29-19.79-.29zm-4.306 8.65c1.278-.002 2.704 0 4.306 0 12.816 0 14.335.046 19.396.276 4.68.214 7.22.996 8.912 1.653 2.24.87 3.837 1.91 5.516 3.59 1.68 1.68 2.72 3.28 3.592 5.52.657 1.69 1.44 4.23 1.653 8.91.23 5.06.28 6.58.28 19.39s-.05 14.33-.28 19.39c-.214 4.68-.996 7.22-1.653 8.91-.87 2.24-1.912 3.835-3.592 5.514-1.68 1.68-3.275 2.72-5.516 3.59-1.69.66-4.232 1.44-8.912 1.654-5.06.23-6.58.28-19.396.28-12.817 0-14.336-.05-19.396-.28-4.68-.216-7.22-.998-8.913-1.655-2.24-.87-3.84-1.91-5.52-3.59-1.68-1.68-2.72-3.276-3.592-5.517-.657-1.69-1.44-4.23-1.653-8.91-.23-5.06-.276-6.58-.276-19.398s.046-14.33.276-19.39c.214-4.68.996-7.22 1.653-8.912.87-2.24 1.912-3.84 3.592-5.52 1.68-1.68 3.28-2.72 5.52-3.592 1.692-.66 4.233-1.44 8.913-1.655 4.428-.2 6.144-.26 15.09-.27zm29.928 7.97c-3.18 0-5.76 2.577-5.76 5.758 0 3.18 2.58 5.76 5.76 5.76 3.18 0 5.76-2.58 5.76-5.76 0-3.18-2.58-5.76-5.76-5.76zm-25.622 6.73c-13.613 0-24.65 11.037-24.65 24.65 0 13.613 11.037 24.645 24.65 24.645C79.617 90.645 90.65 79.613 90.65 66S79.616 41.35 66.003 41.35zm0 8.65c8.836 0 16 7.163 16 16 0 8.836-7.164 16-16 16-8.837 0-16-7.164-16-16 0-8.837 7.163-16 16-16z"/></svg></div> -->
                    <div><img src="data:image/png;base64,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" style="height: 30px; padding-right: 15px; border-right: 2px solid #333;"></div>
                    <div style="padding: 3px 0px 0px 15px;">Instagram</div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
