@extends('layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>{{$pageTitle}}</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">{{$pageTitle}}</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->    

    <div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Column Chart</h5>

            <!-- Column Chart -->
            <div id="columnChart"></div>

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Bar Chart</h5>

            <!-- Bar Chart -->
            <div id="barChart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#barChart"), {
                  series: [{
                    data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
                  }],
                  chart: {
                    type: 'bar',
                    height: 350
                  },
                  plotOptions: {
                    bar: {
                      borderRadius: 4,
                      horizontal: true,
                    }
                  },
                  dataLabels: {
                    enabled: false
                  },
                  xaxis: {
                    categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan',
                      'United States', 'China', 'Germany'
                    ],
                  }
                }).render();
              });
            </script>
            <!-- End Bar Chart -->

            

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">General Sales Average</h5>

            <!-- Radial Bar Chart -->
            <div id="radialBarChart"></div>

          </div>
        </div>
      </div>
    </div>
@endsection
