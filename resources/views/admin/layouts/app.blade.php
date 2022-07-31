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
            font-family: "Raleway", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey w3-right-align" dir="rtl">

    <!-- Top container -->
    <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey"
            onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-right">Logo</span>
    </div>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-right" style="z-index:3;width:300px;right:0!important"
        id="mySidebar"><br>
        <div class="w3-container w3-row">
            <div class="w3-col s4">
                <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
            </div>
            <div class="w3-col s8 w3-bar">
                <span>Welcome, <strong>{{ auth()->user()->name }}</strong></span><br>
                <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
                <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
                <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
            </div>
        </div>
        <hr>
        <div class="w3-container">
            <h5>Dashboard</h5>
        </div>
        <div class="w3-bar-block">
            <a href="#"
                class="w3-bar-item w3-button w3-padding w3-right-align-16 w3-hide-large w3-dark-grey w3-hover-black"
                onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
            {{-- <a href="#" class="w3-bar-item w3-button w3-padding w3-right-align w3-blue"><i
                    class="fa fa-users fa-fw"></i>
                Overview</a> --}}
            <a href="{{ route('users.index') }}" class="w3-bar-item w3-button w3-right-align"><i
                    class="fas w3-margin-left fa-pencil"></i> <i class="fas w3-margin-left fa-users"></i> المستخدمين
            </a>
            <div class="w3-bar-item w3-button w3-right-align" onclick="myAccFunc('demoAcc')">
                <i class="fa-solid w3-margin-left fa-pencil"></i>
                إدارة المحتوى
                <i class="fa fa-caret-down w3-left"></i>
            </div>
            <div id="demoAcc" class="w3-hide w3-white w3-card-4"  style="padding-right: 12.5px">
                {{-- <a href="" class="w3-bar-item w3-button w3-right-align"><i
                    class="fas w3-margin-left fa-pencil"></i> <i class="fas w3-margin-left fa-home"></i> الرئيسية
                    لإدارة المحتوى </a> --}}
                <div class="w3-bar-item w3-button w3-right-align" onclick="myAccFunc('cms-welcome-page-parts')">
                    <i class="fa-solid w3-margin-left fa-house w3-right"></i>الرئيسية <i
                        class="fa fa-caret-down w3-left"></i>
                </div>
                <div id="cms-welcome-page-parts" class="w3-hide w3-white w3-card-4" style="padding-right: 25px">
                    <a href="{{ route('cms.welcome') }}" class="w3-bar-item w3-button w3-right-align"><i
                            class="fas w3-margin-left fa-home"></i>الكل</a>
                    <a href="{{ route('headers.index') }}" class="w3-bar-item w3-button w3-right-align"><i
                            class="fas w3-margin-left fa-image"></i> صور رأس الصفحة</a>
                    <a href="{{ route('projects.index') }}" class="w3-bar-item w3-button w3-right-align"><i
                            class="fa-solid w3-margin-left fa-diagram-project"></i> المشاريع</a>
                    <a href="{{ route('about.index') }}" class="w3-bar-item w3-button w3-right-align"><i
                            class="fa-solid w3-margin-left fa-address-card"></i> عنا</a>
                    <a href="{{ route('communications.index') }}" class="w3-bar-item w3-button w3-right-align"><i
                            class="fa-solid w3-margin-left fa-people-group"></i> تواصل معنا</a>
                    <a href="{{ route('media.index') }}" class="w3-bar-item w3-button w3-right-align"><i
                            class="fa-solid w3-margin-left fa-hashtag"></i> التواصل الإجتماعي</a>
                </div>
            </div>
            <div class="w3-bar-item w3-button w3-right-align" onclick="myAccFunc('demoAcc2')">
                <i class="fa-solid w3-margin-left fa-pencil"></i>
                الأدوار والصلاحيات
                <i class="fa fa-caret-down w3-left"></i>
            </div>
            <div id="demoAcc2" class="w3-hide w3-white w3-card-4">
                {{-- <a href="{{-- route('header_images')" class="w3-bar-item w3-button w3-right-align">
                    <i class="fas w3-margin-left fa-home"></i> الرئيسية
                </a> --}}
                <a href="{{ route('roles.index') }}" class="w3-bar-item w3-button w3-right-align"><i
                        class="fas w3-margin-left fa-home"></i>الأدوار</a>
                <a href="{{ route('permissions.index') }}" class="w3-bar-item w3-button w3-right-align"><i
                        class="fas w3-margin-left fa-image"></i>الصلاحيات</a>
                <a href="{{ route('permission_roles.index') }}" class="w3-bar-item w3-button w3-right-align"><i
                        class="fas w3-margin-left fa-image"></i>ربط الأدوار بالصلاحيات</a>
            </div>
            {{-- <a href="#" class="w3-bar-item w3-button w3-padding w3-right-align"><i class="fa fa-eye fa-fw"></i>
                Views</a>
            <a href="#" class="w3-bar-item w3-button w3-padding w3-right-align"><i class="fa fa-users fa-fw"></i>
                Traffic</a>
            <a href="#" class="w3-bar-item w3-button w3-padding w3-right-align"><i
                    class="fa fa-bullseye fa-fw"></i>  Geo</a>
            <a href="#" class="w3-bar-item w3-button w3-padding w3-right-align"><i
                    class="fa fa-diamond fa-fw"></i>  Orders</a>
            <a href="#" class="w3-bar-item w3-button w3-padding w3-right-align"><i class="fa fa-bell fa-fw"></i>
                News</a>
            <a href="#" class="w3-bar-item w3-button w3-padding w3-right-align"><i class="fa fa-bank fa-fw"></i>
                General</a>
            <a href="#" class="w3-bar-item w3-button w3-padding w3-right-align"><i
                    class="fa fa-history fa-fw"></i>  History</a>
            <a href="#" class="w3-bar-item w3-button w3-padding w3-right-align"><i class="fa fa-cog fa-fw"></i>
                Settings</a><br><br> --}}
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
            <h4>FOOTER</h4>
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
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
