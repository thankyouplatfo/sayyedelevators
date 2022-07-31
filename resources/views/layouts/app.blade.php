<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/w3css/4/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/fontawesome-free-6.1.1-web/css/all.min.css') }}">
    <style>
        *:not(h1,
            h2,
            h3,
            h4,
            h5,
            h6, i) {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Cairo" !important;
            /*color: #11808C !important;*/
        }

        #home {
            font-family: Cairo !important;
        }

        .hover-me {
            border: none;
            display: inline-block;
            padding: 8px 16px;
            vertical-align: middle;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            background-color: inherit;
            text-align: center;
            cursor: pointer;
            white-space: nowrap
        }

        /**/
        .hover-me:hover {
            background-image: linear-gradient(to right,
                    rgba(255, 255, 255, 0.05),
                    rgba(255, 255, 255, 0.05));
        }
    </style>
</head>

<body class="w3-right-align" dir="rtl" id="myPage">
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card">
            <a href="{{ route('welcome') }}" id="home" class="w3-bar-item w3-right w3-button"
                style="margin:0!important;padding:0 8px!important;">
                <h1 style="display: inline!important;margin:0!important;padding:0!important;">
                    <b style="font-family: 'Cairo' !important;margin:0!important;padding:0!important"
                        class="w3-xxlarge">السيد </b>
                    <span class="w3-xlarge"
                        style="font-family: 'Cairo' !important;margin:0!important;padding:0!important">للمصاعد</span>
                </h1>
            </a>
            <!--sidebar-->
            <div class="w3-sidebar w3-bar-block w3-card w3-animate-left"
                style="display:none;right:0!important;width:300px;margin-top:-10px!important" id="rightMenu">
                <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">إغلاق &times;</button>
                <p class="w3-xlarge w3-container" style="font-family:'Cairo'!important;">الصفحات</p>
                @if (Route::has('login'))
                    @admin
                        <a href="{{ route('dashboard') }}" class="w3-bar-item w3-button w3-right-align">لوحة التحكم</a>
                    @endadmin
                    @auth
                        <a class="w3-bar-item w3-button w3-right-align" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                            تسجيل الخروج
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-right-align">
                            تسجيل الدخول </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-right-align"> التسجيل </a>
                        @endif
                    @endauth
                @endif
            </div>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-left">
                <a href="#projects" class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-16">المشاريع</a>
                <a href="#about" class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-16">عنا</a>
                <a href="#contact" class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-16">اتصل بنا</a>
                <button class="w3-button w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>
            </div>
        </div>
    </div>
    @yield('content')
    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-black w3-center">
        <h4 class="w3-xxlarge">تابعنا</h4>
        @include('partials.media')
        <!---->
        <p>تشكر {{ config('app.name') }} موقع <a href="https://www.w3schools.com/w3css/default.asp"
                target="_blank">w3.css</a> على إتاحته هذا القالب مجانا كما قام بتعديل هذا القالب وتطويره/ <a href="https://www.facebook.com/almashkliabualeiz/">معتز المشكلي</a></p>
        <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
            <span class="w3-text w3-padding w3-black w3-hide-small">إلى الأعلى</span>
            <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
                    <i class="fa fa-chevron-circle-up"></i></span></a>
        </div>
    </footer>

    <script src="{{ asset('js/libs/w3.js') }}"></script>
    <script>
        myHeader = w3.slideshow('.header', 0)

        function openRightMenu() {
            document.getElementById("rightMenu").style.display = "block";
        }

        function closeRightMenu() {
            document.getElementById("rightMenu").style.display = "none";
        }
    </script>
</body>

</html>


{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
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

</html> --}}
