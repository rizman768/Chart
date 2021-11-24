@extends('layouts.template')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- VISIT CHART -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h1 class="panel-title">Temperature Suhu</h1>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="chart1" class="ct-chart"></div>
                                </div>
                            </div>
                            <!-- END VISIT CHART -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- VISIT CHART -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h1 class="panel-title">Temperature Suhu</h1>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="chart2" class="ct-chart"></div>
                                </div>
                            </div>
                            <!-- END VISIT CHART -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- VISIT CHART -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h1 class="panel-title">Temperature Suhu</h1>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="chart3" class="ct-chart"></div>
                                </div>
                            </div>
                            <!-- END VISIT CHART -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- VISIT CHART -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h1 class="panel-title">Temperature Suhu</h1>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="chart4" class="ct-chart"></div>
                                </div>
                            </div>
                            <!-- END VISIT CHART -->
                        </div>
                    </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@endsection
@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
	Highcharts.chart('chart1', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Temperature Suhu'
        },
        subtitle: {
            text: 'Dev Id : lht165-1'
        },
        xAxis: {
            categories: {!! json_encode($labels1) !!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (celcius)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} celcius</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Hum SHT',
            data: {!! json_encode($data11) !!}

        }, {
            name: 'TEMPC DS',
            data: {!! json_encode($data21) !!}

        }, {
            name: 'TEMPC SHT',
            data: {!! json_encode($data31) !!}

        }]
    });

    Highcharts.chart('chart2', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Temperature Suhu'
        },
        subtitle: {
            text: 'Dev Id : lht165-2'
        },
        xAxis: {
            categories: {!! json_encode($labels2) !!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (celcius)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} celcius</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Hum SHT',
            data: {!! json_encode($data12) !!}

        }, {
            name: 'TEMPC DS',
            data: {!! json_encode($data22) !!}

        }, {
            name: 'TEMPC SHT',
            data: {!! json_encode($data32) !!}

        }]
    });

    Highcharts.chart('chart3', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Temperature Suhu'
        },
        subtitle: {
            text: 'Dev Id : lht165-3'
        },
        xAxis: {
            categories: {!! json_encode($labels3) !!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (celcius)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} celcius</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Hum SHT',
            data: {!! json_encode($data13) !!}

        }, {
            name: 'TEMPC DS',
            data: {!! json_encode($data23) !!}

        }, {
            name: 'TEMPC SHT',
            data: {!! json_encode($data33) !!}

        }]
    });

    Highcharts.chart('chart4', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Temperature Suhu'
        },
        subtitle: {
            text: 'outdoor_temperature1'
        },
        xAxis: {
            categories: {!! json_encode($labels4) !!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (celcius)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} celcius</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Hum SHT',
            data: {!! json_encode($data14) !!}

        }, {
            name: 'TEMPC DS',
            data: {!! json_encode($data24) !!}

        }, {
            name: 'TEMPC SHT',
            data: {!! json_encode($data34) !!}

        }]
    });
</script>
@endsection