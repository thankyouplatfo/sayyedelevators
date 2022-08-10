<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--style-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/w3css/4/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/fontawesome-free-6.1.1-web/css/all.min.css') }}">
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Cairo", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey w3-right-align" dir="rtl">

    <!-- Top container -->
    <div class="w3-bar w3-top w3-light-black" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey"
            onclick="w3_open();"><i class="fa fa-bars"></i></button>
        <span class="w3-bar-item w3-right">السيد للمصاعد</span>
    </div>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-right w3-light-grey"
        style="z-index:3;width:300px;right:0!important" id="mySidebar"><br>
        <div class="w3-container w3-row">
            <a href="#" class="w3-button w3-padding w3-round" style="white-space:normal!important">
                <div class="w3-col w3-right s4">
                    <img src="{{ asset('images/temp/avataaars.png') }}" class="w3-circle w3-margin-right"
                        style="width:46px">
                </div>
                <div class="w3-col w3-right s8 w3-bar">
                    <span>مرحبا, <strong>{{ auth()->user()->name }}</strong></span><br>
                </div>
            </a>

        </div>
        <hr>
        <div class="w3-container">
            <a href="{{ route('dashboard') }}">
                <h5>لوحة التحكم</h5>
            </a>
        </div>
        <div class="w3-bar-block w3-padding">
            <a href="#"
                class="w3-bar-item w3-button w3-padding w3-right-align-16 w3-hide-large w3-dark-grey w3-hover-black"
                onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
            <a href="{{ route('cms') }}" class="w3-bar-item w3-button w3-right-align w3-round"
                onclick="myAccFunc('demoAcc')">
                <i class="fa-solid fa-paintbrush w3-margin-left w3-text-orange"></i>
                إدارة المحتوى
            </a>
            <a href="{{ route('users.index') }}" class="w3-bar-item w3-button w3-right-align w3-round">
                <i class="fa-solid fa-user w3-margin-left w3-text-light-green"></i> المستخدمين
            </a>
            <div class="w3-bar-item w3-button w3-right-align w3-round" onclick="myAccFunc('demoAcc2')">
                <i class="fa-solid fa-paint-roller w3-margin-left w3-text-light-blue"></i>
                الأدوار والصلاحيات
            </div>
            <div id="demoAcc2" class="w3-hide w3-white w3-card-4">
                {{-- <a href="{{-- route('header_images')" class="w3-bar-item w3-button w3-right-align w3-round">
                    <i class="fas w3-margin-left fa-home"></i> الرئيسية
                </a> --}}
                <a href="{{ route('roles.index') }}" class="w3-bar-item w3-button w3-right-align w3-round"><i
                        class="fas w3-margin-left fa-home"></i>الأدوار</a>
                <a href="{{ route('permissions.index') }}" class="w3-bar-item w3-button w3-right-align w3-round"><i
                        class="fas w3-margin-left fa-image"></i>الصلاحيات</a>
                <a href="{{ route('permission_roles.index') }}"
                    class="w3-bar-item w3-button w3-right-align w3-round"><i class="fas w3-margin-left fa-image"></i>ربط
                    الأدوار بالصلاحيات</a>
            </div>
        </div>
    </nav>


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-right:300px;margin-top:43px;">
        <!-- Header -->
        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="fa fa-dashboard"></i> @yield('page-name')</b></h5>
        </header>
        <div class="w3-container">
            @if (Session::has('msg'))
                <p class="w3-panel w3-blue w3-rightbar w3-padding-16">{{ Session::get('msg') }}</p>
            @endif
            @yield('content')
        </div>
        <!-- Footer -->
        <footer class="w3-container w3-padding-16 w3-light-grey">
            <h4>التذييل</h4>
            @include('inc.thanksCreatorTemplate')
        </footer>

        <!-- End page content -->
    </div>

    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidebar.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }

        // Close the sidebar with the close button
        function myAccFunc(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-green";
            } else {
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-green", "");
            }
        }
    </script>
    <script src="{{ asset('js/libs/jq.js') }}"></script>
    @yield('script')
</body>

</html>
