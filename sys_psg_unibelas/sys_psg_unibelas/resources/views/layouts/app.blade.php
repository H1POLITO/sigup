<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>SIGPU - Universidade de Belas</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.head-assets')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('layouts.navbar-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.footer')

    </div>
    <!-- ./wrapper -->

    @include('layouts.footer-assets')

</body>

</html>
