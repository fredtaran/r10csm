@extends('base')

@section('title', 'CSM | ' . $service->service_name )

@section('page_title', $service->service_name)

@section('page_custom_css')
<style>
    .chart_canvass {
        min-height: 400; 
        height: 400px; 
        max-height: 400px; 
        max-width: 100%;
    }
</style>
@endsection

@section('site_map')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item ">Dashboard</li>
    <li class="breadcrumb-item active">{{ $service->service_name }}</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{ url()->previous() }}" class="mb-2 btn btn-warning font-weight-bold"><i class="fa fa-arrow-left"></i> Return</a>
        <div class="card p-2">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group form-inline">
                        <label class="mr-2">Service Quality Dimension (SQD)</label>
                        <select class="form-control input-lg" name="sqd" id="sqd">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group form-inline">
                        <label class="mr-2">Year</label>
                        <select class="form-control input-lg" name="year" id="year">
                            @foreach ($years as $year)
                                <option value="{{ $year->year }}" @if($year->year == now()->year) selected @endif >{{ $year->year }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <canvas id="service" class="chart_canvass"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_custom_script')
<script>
    $(function () {
        // Bar Chart
        // Get canvas
        var barChartCanvas = $('#service').get(0).getContext('2d');

        // Set options
        var barChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            scales: {
                yAxes: [{
                    ticks: {
                        min: 0,
                        beginAtZero: true,
                        stepSize: 1
                    }
                }]
            }
        }

        // Initialize the chart
        var serviceChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: [],
            options: barChartOptions
        })

        $.ajax({
            url: "{{ url('service_details') }}/{{ $id }}/" + $('#sqd').val() + "/" + $('#year').val(),
            type: "GET",
            success: function(response) {
                const data = response.datapoints.map(function(index) {
                    return index.sqd;
                });

                // Get data
                var barChartData = {
                    labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [
                        {
                        label               : 'Rating',
                        backgroundColor     : 'rgba(60,141,188,0.9)',
                        borderColor         : 'rgba(60,141,188,0.8)',
                        pointRadius          : false,
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : data
                        },
                    ]
                }

                // Load data
                serviceChart.data = barChartData;
                serviceChart.update();
            },
            error: function(xhr, errorStatus, error) {
                console.log(error)
            }
        })

        // Make AJAX call everytime the parameter change
        $('#sqd').on('change', function() {
            $.ajax({
                url: "{{ url('service_details') }}/{{ $id }}/" + $('#sqd').val() + "/" + $('#year').val(),
                type: "GET",
                success: function(response) {
                    const data = response.datapoints.map(function(index) {
                        return index.sqd;
                    });

                    // Get data
                    var barChartData = {
                        labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        datasets: [
                            {
                            label               : 'Rating',
                            backgroundColor     : 'rgba(60,141,188,0.9)',
                            borderColor         : 'rgba(60,141,188,0.8)',
                            pointRadius          : false,
                            pointColor          : '#3b8bba',
                            pointStrokeColor    : 'rgba(60,141,188,1)',
                            pointHighlightFill  : '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data                : data
                            },
                        ]
                    }

                    // Load data
                    serviceChart.data = barChartData;
                    serviceChart.update();
                },
                error: function(xhr, errorStatus, error) {
                    console.log(error)
                }
            })
        })

        $('#year').on('change', function() {
            $.ajax({
                url: "{{ url('service_details') }}/{{ $id }}/" + $('#sqd').val() + "/" + $('#year').val(),
                type: "GET",
                success: function(response) {
                    const data = response.datapoints.map(function(index) {
                        return index.sqd;
                    });

                    // Get data
                    var barChartData = {
                        labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        datasets: [
                            {
                            label               : 'Rating',
                            backgroundColor     : 'rgba(60,141,188,0.9)',
                            borderColor         : 'rgba(60,141,188,0.8)',
                            pointRadius          : false,
                            pointColor          : '#3b8bba',
                            pointStrokeColor    : 'rgba(60,141,188,1)',
                            pointHighlightFill  : '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data                : data
                            },
                        ]
                    }

                    // Load data
                    serviceChart.data = barChartData;
                    serviceChart.update();
                },
                error: function(xhr, errorStatus, error) {
                    console.log(error)
                }
            })
        })
    })
</script>
@endsection