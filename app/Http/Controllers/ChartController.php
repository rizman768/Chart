<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Chart;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index(){
    	$suhus1 = DB::table('temp_suhus')->where('dev_id', '=', 'lht65-1')->get();

    	$labels1 = [];
    	$data11 = [];
        $data21 = [];
        $data31 = [];
        $data41 = [];

    	foreach ($suhus1 as $suhu) {
    		$labels1[] = $suhu->app_id;
            $data11[] = $suhu->hum_sht;
            $data21[] = $suhu->tempc_ds;
            $data31[] = $suhu->tempc_sht;
    	}

        $suhus2 = DB::table('temp_suhus')->where('dev_id', '=', 'lht65-2')->get();

        $labels2 = [];
        $data12 = [];
        $data22 = [];
        $data32 = [];
        $data42 = [];

        foreach ($suhus2 as $suhu) {
            $labels2[] = $suhu->app_id;
            $data12[] = $suhu->hum_sht;
            $data22[] = $suhu->tempc_ds;
            $data32[] = $suhu->tempc_sht;
        }

        $suhus3 = DB::table('temp_suhus')->where('dev_id', '=', 'lht65-3')->get();

        $labels3 = [];
        $data13 = [];
        $data23 = [];
        $data33 = [];
        $data43 = [];

        foreach ($suhus3 as $suhu) {
            $labels3[] = $suhu->app_id;
            $data13[] = $suhu->hum_sht;
            $data23[] = $suhu->tempc_ds;
            $data33[] = $suhu->tempc_sht;
        }   

        $suhus4 = DB::table('temp_suhus')->where('dev_id', '=', 'outdoor_temperature1')->get();

        $labels4 = [];
        $data14 = [];
        $data24 = [];
        $data34 = [];
        $data44 = [];

        foreach ($suhus4 as $suhu) {
            $labels4[] = $suhu->app_id;
            $data14[] = $suhu->hum_sht;
            $data24[] = $suhu->tempc_ds;
            $data34[] = $suhu->tempc_sht;
        }

    	// dd(json_encode($data1));

    	return view('chart.index',['labels1' => $labels1, 'data11' => $data11, 'data21' => $data21, 'data31' => $data31, 'labels2' => $labels2, 'data12' => $data12, 'data22' => $data22, 'data32' => $data32, 'labels3' => $labels3, 'data13' => $data13, 'data23' => $data23, 'data33' => $data33, 'labels4' => $labels4, 'data14' => $data14, 'data24' => $data24, 'data34' => $data34]);
    }

    public function dashboard(){
    	return view('chart.dashboard');
    }
}
