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

    @if (App::isLocale('fa'))
        <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl-all.css') }}">
        <link href="{{ asset('/css/fa.css') }}" rel="stylesheet">
    @endif
</head>
<body>
    <div id="app" class="locale">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/') }}">{{ __('words.laliga') }}</a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="{{ url('/about') }}">{{ __('words.about') }}</a></li>
                        <li><a href="{{ url('/contact') }}">{{ __('words.contact') }}</a></li>
                        <li><a href="{{ url('/guide') }}">{{ __('words.guide') }}</a></li>
                    </ul>

                    <!-- Left Side Of Navbar -->
                    @if (auth()->check())
                        @if (Auth::user()->admin)
                            <ul class="nav navbar-nav">
                                <li><a href="/dashboard">Dashboard</a></li>
                            </ul>
                        @endif
                    @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">{{ __('words.login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ __('words.register') }}</a></li>
                        @else
                            <li class="dropdown" id="markasread" onclick="markNotificationAsRead()">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="glyphicon glyphicon-globe"></span> Notifications <span class="badge">
                                {{ count(auth()->user()->unreadNotifications) }}</span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        @forelse(auth()->user()->unreadNotifications as $notification)
                                            @include('posts.partials.notification.' .snake_case(class_basename($notification->type)))
                                        @empty
                                            <a href="#">No unread notifications</a>
                                        @endforelse
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
    <script src="../../js/main.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
