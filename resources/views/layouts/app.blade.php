<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DNHAdmin</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>
<div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
        <div class="nav nav-sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a class="nav-container" data-toggle="collapse" data-parent="#stacked-menu" href="#la">
                        <i class="fa fa-users fa-2x fa-fw"></i>&nbspLeden
                        <div class="caret-container"><span class="caret arrow"></span></div>
                    </a>
                    <ul class="nav nav-pills nav-stacked collapse in" id="la">
                        <li class=""><a href="{!! url('user') !!}">Overzicht</a></li>
                        <li class=""><a href="{!! url('user_create') !!}">Nieuw lid</a></li>
                    </ul>
                </li>

                {{-- show tools section if present --}}
                @if (array_key_exists('tools', View::getSections()))
                    <li class="nav-divider"></li>
                    @yield('tools')
                @endif
            </ul>
        </div>
    </div>

    <body>
    <div class="container-fluid">
        <nav class="navbar navbar-inverse  navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand logo" href="{{ url('user') }}"><i class="fa fa-anchor"></i>&nbspDNHAdmin</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        @yield('ul-navbar-left')
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @yield('ul-navbar-right')
                    </ul>
                </div>
            </div>
        </nav>
        @yield('body')
    </div>
    @yield('modals')
    </body>

    <!-- Branding Image -->

</div>

<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <!-- Left Side Of Navbar -->
    <ul class="nav navbar-nav">
        &nbsp;
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
</div>
</div>
</nav>

@yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
