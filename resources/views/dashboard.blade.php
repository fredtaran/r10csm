@extends('base')

@section('title', 'CSM | Dashboard')

@section('page_title', 'Dashboard')

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
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <!-- Info-box -->
        <div class="row">
            <!-- Respondents -->
            <!-- F2F -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Number of Respondents | Face-to-Face</span>
                        <span class="info-box-number">{{ @$no_of_respondents->f2f_respondents }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.F2F -->

            <!-- Online -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Number of Respondents | Online</span>
                        <span class="info-box-number">{{ @$no_of_respondents->online_respondents }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.Online -->
            <!-- /.Respondets -->

            <!-- Male -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fa fa-male"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Number of Male</span>
                        <span class="info-box-number">{{ @$sex_count->male }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.Male -->

            <!-- Female -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fa fa-female"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Number of Female</span>
                        <span class="info-box-number">{{ @$sex_count->female }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.Female -->
        </div>
        <!-- /.Info-box -->

        <!-- Citizen's Charter -->
        <div class="row">
            <!-- CC1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Citizen's Charter 1</h4>
                    </div>

                    <div class="card-body">
                        <canvas id="cc1" class="chart_canvass"></canvas>
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
                        <canvas id="cc2" class="chart_canvass"></canvas>
                    </div>
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
                        <canvas id="cc3" class="chart_canvass"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.CC3 -->
        </div>
        <!-- /.Citizen's Charter -->

        <!-- Services -->
        <div class="row">
            @foreach ($divisions as $index => $division)
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ $division->division_name }}</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <ol>
                        @foreach ($division->services as $service)
                            <a href="{{ route('services.service_detail', $service->id) }}">
                                <li>{{ $service->service_name }}</li>
                            </a>
                        @endforeach
                        </ol>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            @endforeach
        </div>
        <!-- /.Services -->
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
                {{ @$cc1_result->cc1_1 }}, {{ @$cc1_result->cc1_2 }}, {{ @$cc1_result->cc1_3 }}
            ],

            backgroundColor: [
                '#f56954', 
                '#00a65a', 
                '#f39c12'
            ],
        }]
    }

    var cc1ChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: true,
        align: 'start'
      },
      plugins: {
        datalabels: {
            formatter: (value, cc1) => {
                let sum = 0;
                let dataArr = cc1.chart.data.datasets[0].data;
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
        plugins: [ChartDataLabels]
    })
    // /.CC1

    // CC 2
    var cc2 = $('#cc2').get(0).getContext('2d')

    var cc2Data = {
        labels  : [
            'Yes, the Citizen\'s Charter was easy to find.',
            'Yes, but the Citizen\'s Charter was hard to find.', 
            'No, I did not see this office\'s Citizen\'s Charter.'
        ],

        datasets: [{
            data: [
                {{ @$cc2_result->cc2_1 }}, {{ @$cc2_result->cc2_2 }}, {{ @$cc2_result->cc2_3 }}
            ],

            backgroundColor: [
                '#f56954', 
                '#00a65a', 
                '#f39c12'
            ],
        }]
    }

    var cc2ChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: true,
        align: 'start'
      },
      plugins: {
        datalabels: {
            formatter: (value, cc2) => {
                let sum = 0;
                let dataArr = cc2.chart.data.datasets[0].data;
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
    new Chart(cc2, {
        type: 'pie',
        data: cc2Data,
        options: cc2ChartOptions,
        plugins: [ChartDataLabels]
    })
    // /.CC2

    // CC 3
    var cc3 = $('#cc3').get(0).getContext('2d')

    var cc3Data = {
        labels  : [
            'Yes, the Citizen\'s Charter was easy to find.',
            'Yes, but the Citizen\'s Charter was hard to find.', 
            'No, I did not see this office\'s Citizen\'s Charter.'
        ],

        datasets: [{
            data: [
                {{ @$cc3_result->cc3_1 }}, {{ @$cc3_result->cc3_2 }}, {{ @$cc3_result->cc3_3 }}
            ],

            backgroundColor: [
                '#f56954', 
                '#00a65a', 
                '#f39c12'
            ],
        }]
    }

    var cc3ChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: true,
        align: 'start'
      },
      plugins: {
        datalabels: {
            formatter: (value, cc3) => {
                let sum = 0;
                let dataArr = cc3.chart.data.datasets[0].data;
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
    new Chart(cc3, {
        type: 'pie',
        data: cc3Data,
        options: cc3ChartOptions,
        plugins: [ChartDataLabels]
    })
    // /.CC3
</script>
@endsection