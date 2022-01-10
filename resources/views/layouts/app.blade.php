
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BookBlog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}"      rel="stylesheet">
    <link href="{{ asset('css/styly.css') }}" rel="stylesheet">

    <link href="{{ asset('css/events.css') }}"   rel="stylesheet">
    <link href="{{ asset('css/article.css') }}"   rel="stylesheet">
    <link href="{{ asset('css/about.css') }}"   rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top ">

        <a class="navbar-brand" href="{{url('/')}}"><h2 style="padding-left: 3vw">BOOKS & MOVIES Blog</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>




        <div class="collapse navbar-collapse " id="navbarsExampleDefault">
            <ul class="navbar-nav " style="margin-left: 20%">

                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/articles')}}"><h5> Articles   |</h5>
                        <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/inspiration')}}"> <h5> Inspiration  |</h5>
                        <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/events')}}"> <h5> Events |</h5>
                        <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/about')}}"> <h5> About us   |</h5>
                        <span class="sr-only">(current)</span></a>
                </li>




                    <li class="nav-item">
                        @auth
                            <a class="nav-link" href="{{ route('user.index') }}">{{__('Users')}}</a>
                        @endauth
                    </li>

                    <li class="nav-item">
                        @auth
                            <a class="nav-link" href="{{ route('contacts.index') }}">{{__('Messages')}}</a>
                        @endauth
                    </li>

            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
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
                @endguest
                @auth()
                    <li class="nav-item">
                        <a  class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            @<strong> {{Auth::user()->name}}</strong> logout
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                @endauth
            </ul>
        </div>

    </nav>

    <main class="py-4 ">
        @yield('content')
    </main>
</div>
</body>
</html>
