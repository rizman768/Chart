<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Chart;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index(){
    	$indoor = DB::table('indoor_test_anomaly_marks')->get();
        $outdoor = DB::table('outdoor_test_anomaly_marks')->get();
        $berkeley = DB::table('berkeley_test_anomaly_marks')->get();
        $indoor_imputated = DB::table('indoor_imputated_marked_anomaly')->get();
        $outdoor_imputated = DB::table('outdoor_imputated_marked_anomaly')->get();
        $berkeley_imputated = DB::table('berkeley_imputated_marked_anomaly')->get();

    	$labels1 = [];
    	$data11 = [];
        $data21 = [];
        $data31 = [];
        $data41 = [];

    	foreach ($indoor as $suhu) {
    		$labels1[] = $suhu->timestamp;

            if ($suhu->anomaly_hum_sht == 1){
                $data11[] = (object) ['y' => $suhu->hum_sht, 'color' =>  '#BF0B23'];
            } else {
                $data11[] = $suhu->hum_sht;
            }

            if ($suhu->anomaly_tempc_ds == 1){
                $data21[] = (object) [ 'y' => $suhu->tempc_ds, 'color' => '#BF0B23'];
            } else {
                $data21[] = $suhu->tempc_ds;
            }
            
            if ($suhu->anomaly_tempc_sht == 1){
                $data31[] = (object) [ 'y' => $suhu->tempc_sht, 'color' => '#BF0B23'];
            } else {
                $data31[] = $suhu->tempc_sht;
            }
            
            if ($suhu->anomaly_batv == 1){
                $data41[] = (object) [ 'y' => $suhu->batv, 'color' => '#BF0B23'];
            } else {
                $data41[] = $suhu->batv;
            }
            
    	}

        $labels2 = [];
        $data12 = [];
        $data22 = [];
        $data32 = [];
        $data42 = [];

        foreach ($outdoor as $suhu) {
            $labels2[] = $suhu->timestamp;
            if ($suhu->anomaly_hum_sht == 1){
                $data12[] = (object) [ 'y' => $suhu->hum_sht, 'color' => '#BF0B23'];
            } else {
                $data12[] = $suhu->hum_sht;
            }
            if ($suhu->anomaly_tempc_ds == 1){
                $data22[] = (object) [ 'y' => $suhu->tempc_ds, 'color' => '#BF0B23'];
            } else {
                $data22[] = $suhu->tempc_ds;
            }
            if ($suhu->anomaly_tempc_sht == 1){
                $data32[] = (object) [ 'y' => $suhu->tempc_sht, 'color' => '#BF0B23'];
            } else {
                $data32[] = $suhu->tempc_sht;
            }
            if ($suhu->anomaly_batv == 1){
                $data42[] = (object) [ 'y' => $suhu->batv, 'color' => '#BF0B23'];
            } else {
                $data42[] = $suhu->batv;
            }
        }

        $labels3 = [];
        $data13 = [];
        $data23 = [];
        $data33 = [];
        $data43 = [];

        foreach ($berkeley as $suhu) {
            $labels3[] = $suhu->timestamp;
            if ($suhu->anomaly_temperature == 1){
                $data13[] = (object) [ 'y' => $suhu->temperature, 'color' => '#BF0B23'];
            } else {
                $data13[] = $suhu->temperature;
            }
            if ($suhu->anomaly_humadity == 1){
                $data23[] = (object) [ 'y' => $suhu->humadity, 'color' => '#BF0B23'];
            } else {
                $data23[] = $suhu->humadity;
            }
            if ($suhu->anomaly_light == 1){
                $data33[] = (object) [ 'y' => $suhu->light, 'color' => '#BF0B23'];
            } else {
                $data33[] = $suhu->light;
            }
            if ($suhu->anomaly_voltage == 1){
                $data43[] = (object) [ 'y' => $suhu->voltage, 'color' => '#BF0B23'];
            } else {
                $data43[] = $suhu->voltage;
            }
        }

        $labels4 = [];
        $data14 = [];
        $data24 = [];
        $data34 = [];
        $data44 = [];

        foreach ($indoor_imputated as $suhu) {
            $labels4[] = $suhu->timestamp;
            $data14[] = $suhu->fixed_hum_sht;
            $data24[] = $suhu->fixed_tempc_ds;
            $data34[] = $suhu->fixed_tempc_sht;
            $data44[] = $suhu->fixed_batv;
        }

        $labels5 = [];
        $data15 = [];
        $data25 = [];
        $data35 = [];
        $data45 = [];

        foreach ($outdoor_imputated as $suhu) {
            $labels5[] = $suhu->timestamp;
            $data15[] = $suhu->fixed_hum_sht;
            $data25[] = $suhu->fixed_tempc_ds;
            $data35[] = $suhu->fixed_tempc_sht;
            $data45[] = $suhu->fixed_batv;
        }

        $labels6 = [];
        $data16 = [];
        $data26 = [];
        $data36 = [];
        $data46 = [];

        foreach ($berkeley_imputated as $suhu) {
            $labels6[] = $suhu->timestamp;
            $data16[] = $suhu->fixed_temperature;
            $data26[] = $suhu->fixed_humadity;
            $data36[] = $suhu->fixed_light;
            $data46[] = $suhu->fixed_voltage;
        }


    	// dd(json_encode($data1));

    	return view('chart.index',['labels1' => $labels1, 'data11' => $data11, 'data21' => $data21, 'data31' => $data31, 'data41' => $data41, 'labels2' => $labels2, 'data12' => $data12, 'data22' => $data22, 'data32' => $data32, 'data42' => $data42, 'labels3' => $labels3, 'data13' => $data13, 'data23' => $data23, 'data33' => $data33, 'data43' => $data43, 'labels4' => $labels4, 'data14' => $data14, 'data24' => $data24, 'data34' => $data34, 'data44' => $data44, 'labels5' => $labels5, 'data15' => $data15, 'data25' => $data25, 'data35' => $data35, 'data45' => $data45, 'labels6' => $labels6, 'data16' => $data16, 'data26' => $data26, 'data36' => $data36, 'data46' => $data46]);
    }

    public function dashboard(){
    	return view('chart.dashboard');
    }
}
