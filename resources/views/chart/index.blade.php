@extends('layouts.template')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-heading">
                                
                            </div>
                            <div class="panel-body">
                                <div id="chart"></div>
                            </div>
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
	Highcharts.chart('chart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Jumlah orang yang menyukai Framework'
        },
        subtitle: {
            text: 'Source: Ngasal'
        },
        xAxis: {
            categories: {!! json_encode($categories) !!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah (orang)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} orang</b></td></tr>',
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
            name: 'Framework',
            data: 
            {!! json_encode($data) !!}
        }]
    });
</script>
@endsection