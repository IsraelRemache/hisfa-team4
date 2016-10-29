<?php

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = [
        	['quantity' => '5', 'resource_id' => '1'],
        	['quantity' => '3', 'resource_id' => '2'],
        	['quantity' => '4', 'resource_id' => '3'],
        	['quantity' => '10', 'resource_id' => '4'],
        	['quantity' => '7', 'resource_id' => '5'],
        ];

        DB::table('stocks')->insert($stocks);
    }
}
