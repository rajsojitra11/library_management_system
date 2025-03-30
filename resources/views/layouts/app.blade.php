<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Library Management System') }}</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                   <h2 style="margin-left:340px">Library Management System</h2>
                </li>
                <li class="nav-item" style="margin-left:338px">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt text-danger" ></i>
                        <span>Logout</span>
                    </a>               
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Centered Profile Image -->
            <div class="text-center mt-3">
                <img class="profile-user-img img-fluid img-circle"
                     src="../../dist/img/logo.jpeg"
                     alt="User profile picture">
            </div>
            <a href="#" class="brand-link">
              
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('dashboard')}}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('authors') }}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Authors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('publishers') }}" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>Publishers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories') }}" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('books') }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Books</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('students') }}" class="nav-link">
                                <i class="nav-icon fas fa-user-graduate"></i>
                                <p>Registered Students</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('book_issued') }}" class="nav-link">
                                <i class="nav-icon fas fa-book-reader"></i>
                                <p>Book Issue</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('reports')}}" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('settings')}}" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('title')</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>&copy; 2025 <a href="#">Library Management System</a>.</strong> All rights reserved.
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
