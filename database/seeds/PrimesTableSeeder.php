<?php

use Illuminate\Database\Seeder;

class PrimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $primes = [
        	['name' => 'Silo 1', 'quantity' => '80', 'resource_id' => '1'],
        	['name' => 'Silo 2', 'quantity' => '40', 'resource_id' => '2'],
        	['name' => 'Silo 3', 'quantity' => '60', 'resource_id' => '3'],
        	['name' => 'Silo 4', 'quantity' => '30', 'resource_id' => '4'],
        	['name' => 'Silo 5', 'quantity' => '10', 'resource_id' => '5'],
        	['name' => 'Silo 6', 'quantity' => '70', 'resource_id' => '1'],
        ];

        DB::table('primes')->insert($primes);
    }
}
