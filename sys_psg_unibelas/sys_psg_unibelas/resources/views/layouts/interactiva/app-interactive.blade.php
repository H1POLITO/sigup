<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIGPU - Universidade de Belas</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.interactiva.head-assets')
    

</head>

<body class="hold-transition sidebar-collapse layout-top-nav">

    <div class="wrapper">

          <!-- Navbar -->
          @include('layouts.interactiva.navbar-interactive')

          @include('layouts.interactiva.navbar-sidebar-interactive')

          <body id="body">

            @yield('content-interactive')
          </body>
          @include('layouts.interactiva.footer-interactive')
          @include('layouts.interactiva.footer-assets-interactive')


         
         
    </div>
</body>
</html>