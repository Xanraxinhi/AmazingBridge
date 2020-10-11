<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>
    <link rel="icon" type="image/png" href="{{ asset('backend/img/AT-pro-logo.png') }}"/>

    <!-- Import lib -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/fontawesome-free/css/all.min.css') }}">
    <!-- End import lib -->

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/admin-template-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/alert.css') }}">

    @stack('css')
</head>
<body class="overlay-scrollbar sidebar-expand">
<!-- navbar -->
<div class="navbar">
    <!-- nav left -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link">
                <i class="fas fa-bars" onclick="collapseSidebar()"></i>
            </a>
        </li>
        <li class="nav-item" style="margin-left: 50px">
            <img src="{{ asset('backend/img/AT-pro-black.png') }}" alt="ATPro logo" class="logo logo-light">
            <img src="{{ asset('backend/img/AT-pro-white.png') }}" alt="ATPro logo" class="logo logo-dark">
        </li>
    </ul>
    <!-- end nav left -->
    <!-- form -->
    <form class="navbar-search">
        <input type="text" name="Search" class="navbar-search-input" placeholder="What you looking for...">
        <i class="fas fa-search"></i>
    </form>
    <!-- end form -->
    <!-- nav right -->
    <ul class="navbar-nav nav-right">
        <li class="nav-item mode">
            <a class="nav-link" href="#" onclick="switchTheme()">
                <i class="fas fa-moon dark-icon"></i>
                <i class="fas fa-sun light-icon"></i>
            </a>
        </li>
        {{--        notification--}}
            @includeIf('layouts.notification')
        {{--        end notification--}}
        <li class="nav-item avt-wrapper">
            <div class="avt dropdown">
                <img src="{{ asset('backend/img/admin.png') }}" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
                <ul id="user-menu" class="dropdown-menu">
                    <li class="dropdown-menu-item">
                        <a class="dropdown-menu-link">
                            <div>
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="dropdown-menu-item">
                        <a href="#" class="dropdown-menu-link">
                            <div>
                                <i class="fas fa-cog"></i>
                            </div>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="dropdown-menu-item">
                        <a href="#" class="dropdown-menu-link">
                            <div>
                                <i class="far fa-credit-card"></i>
                            </div>
                            <span>Payments</span>
                        </a>
                    </li>
                    <li class="dropdown-menu-item">
                        <a href="#" class="dropdown-menu-link">
                            <div>
                                <i class="fas fa-spinner"></i>
                            </div>
                            <span>Projects</span>
                        </a>
                    </li>
                    <li class="dropdown-menu-item">
                        <a href="{{ route('logout') }}"
                           class="dropdown-menu-link"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <div>
                                <i class="fas fa-sign-out-alt"></i>
                            </div>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <!-- end nav right -->
</div>
<!-- end navbar -->
<!-- sidebar -->
<div class="sidebar">
    <ul class="sidebar-nav">
        <li class="sidebar-nav-item">
            <a href="{{ route('home') }}" class="sidebar-nav-link active">
                <div>
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <span>
                    Dashboard
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="{{ route('bridge') }}" class="sidebar-nav-link">
                <div>
                    <i class="fab fa-accusoft"></i>
                </div>
                <span>Bridges</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="{{ route('country') }}" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-tasks"></i>
                </div>
                <span>Countries</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-spinner"></i>
                </div>
                <span>Praesent</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-check-circle"></i>
                </div>
                <span>Pellentesque</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-bug"></i>
                </div>
                <span>Morbi</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-chart-line"></i>
                </div>
                <span>Praesent</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-book-open"></i>
                </div>
                <span>Pellentesque</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-adjust"></i>
                </div>
                <span>Morbi</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
                <div>
                    <i class="fab fa-algolia"></i>
                </div>
                <span>Praesent</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-audio-description"></i>
                </div>
                <span>Pellentesque</span>
            </a>
        </li>
    </ul>
</div>
<!-- end sidebar -->
<!-- main content -->
<div class="wrapper">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ $message }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('content')
</div>
<!-- end main content -->
<!-- import script -->
@stack('js')
<script src="{{ asset('backend/js/index.js') }}"></script>
<!-- end import script -->
</body>
</html>
