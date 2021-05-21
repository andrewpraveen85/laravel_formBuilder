<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
<!--        <script src="{{ asset('js/app.js') }}" defer></script>-->

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/dist/css/adminlte.min.css') }}">
        
        <link href="{{ asset('/bower_components/admin-lte/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/bower_components/admin-lte/dist/css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/bower_components/admin-lte/dist/css/codemirror.css') }}" rel="stylesheet">

        <link href="{{ asset('/bower_components/admin-lte/dist/css/form_builder.css') }}" rel="stylesheet">
        <!-- Styles -->
        <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                    </li>
                </ul>
            </nav>

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('forms') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Forms
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('create') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>
            <div class="content-wrapper">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2014-2021 <a href="">AdminLTE.io</a>.</strong> All rights reserved.
            </footer>
            <!-- /.control-sidebar -->
        </div>
        <script src="{{ asset('/bower_components/admin-lte/dist/js/jquery.min.js') }}" defer></script>
        <script src="{{ asset('/bower_components/admin-lte/dist/js/jquery-ui.min.js') }}" defer></script>
        <script src="{{ asset('/bower_components/admin-lte/dist/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('/bower_components/admin-lte/dist/js/form_builder.min.js') }}" defer></script>
        <script src="{{ asset('/bower_components/admin-lte/dist/js/codemirror.min.js') }}" defer></script>
        <script src="{{ asset('/bower_components/admin-lte/dist/js/formatting.js') }}" defer></script>
        <script src="{{ asset('/bower_components/admin-lte/dist/js/newjavascript.js') }}" defer></script>
    </body>
</html>