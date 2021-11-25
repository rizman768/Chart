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
                                    <div id="chart5" class="ct-chart"></div>
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
                                    <div id="chart6" class="ct-chart"></div>
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
            text: 'Indoor Test Anomaly Marks'
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
            name: 'HUM SHT',
            data: {!! json_encode($data11) !!}

        }, {
            name: 'TEMPC DS',
            data: {!! json_encode($data21) !!}

        }, {
            name: 'TEMPC SHT',
            data: {!! json_encode($data31) !!}

        }, {
            name: 'BATV',
            data: {!! json_encode($data41) !!}

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
            text: 'Outdoor Test Anomaly Marks'
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
            name: 'HUM SHT',
            data: {!! json_encode($data12) !!}

        }, {
            name: 'TEMPC DS',
            data: {!! json_encode($data22) !!}

        }, {
            name: 'TEMPC SHT',
            data: {!! json_encode($data32) !!}

        }, {
            name: 'BATV',
            data: {!! json_encode($data42) !!}

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
            text: 'Berkeley Test Anomaly Marks'
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
            name: 'TEMPERATURE',
            data: {!! json_encode($data13) !!}

        }, {
            name: 'HUMADITY',
            data: {!! json_encode($data23) !!}

        }, {
            name: 'LIGHT',
            data: {!! json_encode($data33) !!}

        }, {
            name: 'VOLTAGE',
            data: {!! json_encode($data43) !!}

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
            text: 'Indoor Imputated Marked Anomaly'
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
            name: 'FIXED HUM SHT',
            data: {!! json_encode($data14) !!}

        }, {
            name: 'FIXED TEMPC DS',
            data: {!! json_encode($data24) !!}

        }, {
            name: 'FIXED TEMPC SHT',
            data: {!! json_encode($data34) !!}

        }, {
            name: 'FIXED BATV',
            data: {!! json_encode($data44) !!}

        }]
    });

    Highcharts.chart('chart5', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Temperature Suhu'
        },
        subtitle: {
            text: 'Outdoor Immputated Marked Anomaly'
        },
        xAxis: {
            categories: {!! json_encode($labels5) !!},
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
            name: 'FIXED HUM SHT',
            data: {!! json_encode($data15) !!}

        }, {
            name: 'FIXED TEMPC DS',
            data: {!! json_encode($data25) !!}

        }, {
            name: 'FIXED TEMPC SHT',
            data: {!! json_encode($data35) !!}

        }, {
            name: 'FIXED BATV',
            data: {!! json_encode($data45) !!}

        }]
    });

    Highcharts.chart('chart6', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Temperature Suhu'
        },
        subtitle: {
            text: 'Berkeley Immputated Marked Anomaly'
        },
        xAxis: {
            categories: {!! json_encode($labels6) !!},
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
            name: 'FIXED TEMPERATURE',
            data: {!! json_encode($data16) !!}

        }, {
            name: 'FIXED HUMADITY',
            data: {!! json_encode($data26) !!}

        }, {
            name: 'FIXED LIGHT',
            data: {!! json_encode($data36) !!}

        }, {
            name: 'FIXED VOLTAGE',
            data: {!! json_encode($data46) !!}

        }]
    });
</script>
@endsection