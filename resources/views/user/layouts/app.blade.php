
<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================
 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)
 Coded by Creative Tim
=========================================================
 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/light-bootstrap-dashboard.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.3.45/css/materialdesignicons.min.css">

</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/" style="font-size: 24px;" class="simple-text text-capitalize">
                        FullStop.
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('calendar.index')}}">
                            <span style="font-size: 25px;" class="mdi mdi-calendar-month"></span>
                            <p class="ml-2 text-capitalize" style="font-size: 18px;">Calendar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <span style="font-size: 25px;" class="mdi mdi-chart-bar"></span>
                            <p class="ml-2 text-capitalize" style="font-size: 18px;">Stats</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('reminder.index')}}">
                            <span style="font-size: 25px;" class="mdi mdi-chat-alert-outline"></span>
                            <p class="ml-2 text-capitalize" style="font-size: 18px;">Reminders</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">{{ Auth::user()->name }}</span>
                                    <span class="mdi mdi-menu-down"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">
                                        <span class="mdi mdi-dots-horizontal-circle-outline"></span>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="mdi mdi-account-circle"></span>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <span class="mdi mdi-logout-variant"></span>
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            
            @yield('content')

            <!-- start footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Calendar
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Stats
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Reminders
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Profile
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="/">FullStop.</a> Uniquely You.
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('js/bootstrap-switch.js') }}"></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('js/chartlist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('js/bootstrap-notify.js') }}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('js/light-bootstrap-dashboard.js') }}" type="text/javascript"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="{{ asset('js/dashboard.js') }}" type="text/javascript"></script>


</html>