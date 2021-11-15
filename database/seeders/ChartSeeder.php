<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chart = [
        	[
        		'framework' => "Laravel",
        		'jumlah' => "100",
        	],
        	[
        	'framework' => "Codeigniter",
        	'jumlah' => "50",
        	]
        ];

        \DB::table('charts')->insert($chart);
    }
}
