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
        <div class="card">
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

        // Get data
        var barChartData = {
            labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                label               : 'Digital Goods',
                backgroundColor     : 'rgba(60,141,188,0.9)',
                borderColor         : 'rgba(60,141,188,0.8)',
                pointRadius          : false,
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data                : [28, 48, 40, 19, 86, 27, 90]
                },
                {
                label               : 'Electronics',
                backgroundColor     : 'rgba(210, 214, 222, 1)',
                borderColor         : 'rgba(210, 214, 222, 1)',
                pointRadius         : false,
                pointColor          : 'rgba(210, 214, 222, 1)',
                pointStrokeColor    : '#c1c7d1',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data                : [65, 59, 80, 81, 56, 55, 40]
                },
            ]
        }

        // Set options
        var barChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false
        }

        // Initialize the chart
        var serviceChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })
    })
</script>
@endsection