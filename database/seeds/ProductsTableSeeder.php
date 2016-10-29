<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
        	['length_id' => '1', 'quantity' => '3', 'quality_id' => '1'],
        	['length_id' => '2', 'quantity' => '4', 'quality_id' => '1'],
        	['length_id' => '1', 'quantity' => '2', 'quality_id' => '2'],
        	['length_id' => '2', 'quantity' => '6', 'quality_id' => '2'],
        	['length_id' => '3', 'quantity' => '5', 'quality_id' => '1'],
        ];

        DB::table('products')->insert($products);
    }
}
