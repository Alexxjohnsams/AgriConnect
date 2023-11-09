<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="{{ asset('css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('css/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @guest
        @yield('content')
    @else
    <div id="app">
       {{--  --}}
        <!-- ======= Header ======= -->
        @include('layouts.header')
        <!-- End Header -->
        @include('layouts.sidebar')
        <main id="main" class="py-4 main">
            @yield('content')
        </main>
        
         <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
            &copy; Copyright <strong><span>Team J</span></strong>. 2023
            </div>
        </footer><!-- End Footer -->
 
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short">
                </i>
        </a>
    </div>

    @endguest

    <script src="{{ asset('js/apexcharts.min.js') }}" defer></script>  
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>  
    <script src="{{ asset('js/chart.umd.js') }}" defer></script>  
    <script src="{{ asset('js/echarts.min.js') }}" defer></script>  
    <script src="{{ asset('js/quill.min.js') }}" defer></script>  
    <script src="{{ asset('js/main.js') }}" defer></script>  
</body>
</html>
