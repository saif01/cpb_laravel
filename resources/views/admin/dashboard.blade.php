@extends('admin.layout.master')
{{-- Page CSS --}}
@section('page-css')
   <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/chartist.min.css') }}">
@endsection
{{-- Page Js --}}
@section('page-js')
    <script src="{{ asset('app-assets/vendors/js/chart.min.js') }}" ></script>
    <script src="{{ asset('app-assets/js/dashboard1.js') }}" ></script>
    <script src="{{ asset('app-assets/vendors/js/chartist.min.js') }}" ></script>

    <script>
        //Get the context of the Chart canvas element we want to select
        var ctx = $("#column-chart");

        // Chart Options
        var chartOptions = {
            // Elements options apply to all of the options unless overridden in a dataset
            // In this case, we are setting the border of each bar to be 2px wide and green
            elements: {
                rectangle: {
                    borderWidth: 2,
                    borderColor: 'rgb(0, 255, 0)',
                    borderSkipped: 'bottom'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            responsiveAnimationDuration: 500,
            legend: {
                position: 'top',
            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: false,
                    },
                    scaleLabel: {
                        display: true,
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: false,
                    },
                    scaleLabel: {
                        display: true,
                    }
                }]
            },
            title: {
                display: true,
                text: 'Monthly Visitor View'
            }
        };

        // Chart Data
        var chartData = {
            //labels: ['January', "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ],

            labels:[
                @foreach ($chartData as $Chart )
            <?php echo "'" .date("F", mktime(0, 0, 0, $Chart->month, 1)) . "'" . "," ?>
                @endforeach
            ],

            datasets: [{
                label: "Monthly Data",

                //data: [65, 59, 80, 81, 56, 12,34,34,55, 99, 33, 22],
            data: [
                        @foreach ($chartData as $Chart )
                        {{ $Chart->number. "," }}
                    @endforeach
            ],

                backgroundColor: "#16D39A",
                hoverBackgroundColor: "rgba(22,211,154,.9)",
                borderColor: "transparent"
            }, ]
        };

        var config = {
            type: 'bar',

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var lineChart = new Chart(ctx, config);
    </script>

@endsection
{{-- End Js Section --}}

{{-- Start Main Content --}}

@section('content')

 <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
          <div class="card gradient-blackberry">
            <div class="card-content">
              <div class="card-body pt-2 pb-0">
                <div class="media">
                  <div class="media-body white text-left">
                    <h3 class="font-large-1 mb-0">{{ $adminData }}</h3>
                    <span>Total Admin</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="fa fa-grav font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
          <div class="card gradient-ibiza-sunset">
            <div class="card-content">
              <div class="card-body pt-2 pb-0">
                <div class="media">
                  <div class="media-body white text-left">
                    <h3 class="font-large-1 mb-0">{{ $userData }}</h3>
                    <span>Total User</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="icon-users font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
              </div>

            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
          <div class="card gradient-green-tea">
            <div class="card-content">
              <div class="card-body pt-2 pb-0">
                <div class="media">
                  <div class="media-body white text-left">
                    <h3 class="font-large-1 mb-0">{{ $recruitData }}</h3>
                    <span>Live Application</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="icon-graph font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
          <div class="card gradient-pomegranate">
            <div class="card-content">
              <div class="card-body pt-2 pb-0">
                <div class="media">
                  <div class="media-body white text-left">
                    <h3 class="font-large-1 mb-0">{{ $todayVistor }}</h3>
                    <span>Today Visitors</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="ft-activity font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Statistics cards Ends-->

       <!-- Bar Chart -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Visitor Bar Chart</h4>
            </div>
            <div class="card-content">
                <div class="card-body chartjs">
                    <canvas id="column-chart" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
