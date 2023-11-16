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
    <div class="spinner-container">
        <div class="spinner"></div>
      </div>
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
            &copy; Copyright <strong><span>HackGombe 1.0</span></strong>.
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
    <script>
        window.onload = function() {
            document.querySelector('.spinner-container').style.display = 'none';
            document.querySelector('body').style.display = 'block';
        }
    </script>


{{-- charts for analytics page | Column chart --}}
<script>
    document.addEventListener("DOMContentLoaded", () => {
      new ApexCharts(document.querySelector("#columnChart"), {
        series: [{
          name: 'Farmers',
          data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 50, 38]
        }, {
          name: 'Vet Doctors',
          data: [76, 85, 101, 98, 87, 105, 91, 114, 94, 61, 58]
        }, {
          name: 'Free Cash Flow',
          data: [35, 41, 36, 26, 45, 48, 52, 53, 41, 61, 58]
        }],
        chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Akko', 'Balanga', 'Billiri', 'Dukku', 'Kaltungo', 'Kwami', 'Shomgom', 'Funakaye', 'Gombe', 'Nafada', 'Y/Deba'],
        },
        yaxis: {
          title: {
            text: '$ (thousands)'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function(val) {
              return "$ " + val + " thousands"
            }
          }
        }
      }).render();
    });
  </script>
  <!-- End Column Chart -->

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      new ApexCharts(document.querySelector("#radialBarChart"), {
        series: [44, 55, 67, 83, 30],
        chart: {
          height: 385,
          type: 'radialBar',
          toolbar: {
            show: true
          }
        },
        plotOptions: {
          radialBar: {
            dataLabels: {
              name: {
                fontSize: '22px',
              },
              value: {
                fontSize: '16px',
              },
              total: {
                show: true,
                label: 'Total',
                formatter: function(w) {
                  // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                  return 249
                }
              }
            }
          }
        },
        labels: ['Beans', 'Maize', 'Groundnut', 'Soya-Beans', 'Rice'],
      }).render();
    });
  </script>
  <!-- End Radial Bar Chart -->
</body>
</html>
