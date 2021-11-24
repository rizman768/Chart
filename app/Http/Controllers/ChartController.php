<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Chart;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index(){
    	$suhus = DB::table('temp_suhus')->get();

    	$labels = [];
    	$data1 = [];
        $data2 = [];
        $data3 = [];
        $data4 = [];

    	foreach ($suhus as $suhu) {
    		$labels[] = $suhu->app_id;
            $data1[] = $suhu->hum_sht;
            $data2[] = $suhu->tempc_ds;
            $data3[] = $suhu->tempc_sht;
    	}

    	// dd(json_encode($data1));

    	return view('chart.index',['labels' => $labels, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
    }

    public function dashboard(){
    	return view('chart.dashboard');
    }
}
