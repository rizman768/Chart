<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chart;

class ChartController extends Controller
{
    public function index(){
    	$chart = Chart::all();

    	$categories = [];
    	$data = [];

    	foreach ($chart as $c) {
    		$categories[] = $c->framework;
    		$data[] = $c->jumlah;
    	}

    	// dd(json_encode($data));

    	return view('chart.index',['categories' => $categories, 'data' => $data]);
    }

    public function dashboard(){
    	return view('chart.dashboard');
    }
}
