@extends('base')

@section('title', 'CSM | Dashboard')

@section('page_title', 'Dashboard')

@section('site_map')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="row">
            <!-- CC1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Citizen's Charter 1</h4>
                    </div>

                    <div class="card-body">
                        <canvas id="cc1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.CC1 -->

            <!-- CC2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Citizen's Charter 2</h4>
                    </div>

                    <div class="card-body">
                        
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <!-- /.CC2 -->

            <!-- CC3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Citizen's Charter 3</h4>
                    </div>

                    <div class="card-body">
                        
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <!-- /.CC3 -->

        @foreach ($divisions as $division)
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ $division->division_name}}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            
            <div class="card-body">
                <div class="chart">
                    <ol>
                        @foreach ($division->services as $service)
                            <li>{{ $service->service_name }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        @endforeach
    </div>
</div>
@endsection

@section('page_custom_script')
<script>
    // CC 1
    var cc1 = $('#cc1').get(0).getContext('2d')

    var cc1Data = {
        labels  : [
            'Yes, aware before my transaction with this office.',
            'Yes, but aware only when I saw the Citizen\'s Charter of this office.', 
            'No, not aware of the Citizen\'s Charter.'
        ],

        datasets: [{
            data: [
                1, 2, 3
            ],

            backgroundColor: [
                '#f56954', 
                '#00a65a', 
                '#f39c12'
            ],
        }]
    }

    var cc1ChartOptions = {
        tooltips: false,
        plugins: {
            datalabels: {
                formatter: (value, ctx) => {
                    let sum = 0;
                    let dataArr = ctx.chart.data.datasets[0].data;
                    dataArr.map(data => {
                        sum += data;
                    });
                    let percentage = (value*100 / sum).toFixed(2)+"%";
                    return percentage;
                },
                color: '#fff',
            }
        }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(cc1, {
      type: 'pie',
      data: cc1Data,
      options: cc1ChartOptions,
    })
    // /.CC!
</script>
@endsection