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
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Clubs <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('clubs.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Club</a></li>
                                <li><a href="{{ route('stadiums.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Stadium</a></li>
                                <li><a href="{{ route('statistics.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Statistics</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li><a href="{{ route('countries.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Countries</a></li>
                    <li><a href="{{ route('galleries.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Gallery</a></li>
                    <li><a href="{{ route('games.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Games</a></li>
                    <li><a href="{{ route('leagues.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Leagues</a></li>
                    <li><a href="{{ route('players.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Players</a></li>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Posts <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('posts.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Post</a></li>
                                <li><a href="{{ route('tags.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Tag</a></li>
                                <li><a href="{{ route('categories.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Category</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Prizes <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('prizes.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Prizes</a></li>
                                <li><a href="{{ route('awards.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Award</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li><a href="{{ route('seasons.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Season</a></li>
                    <li><a href="{{ route('standings.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Standings</a></li>
                    <li><a href="{{ route('stats.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Stats</a></li>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Titles <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('cups.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Cups</a></li>
                                <li><a href="{{ route('titles.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Tiltle</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li><a href="{{ route('weeks.create') }}"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-user"></span> Weeks</a></li>
                </ul>
            <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
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


