<?php

use Illuminate\Database\Seeder;

class WastesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wastes = [
        	['name' => 'Silo 1', 'quantity' => '80', 'resource_id' => '1'],
        	['name' => 'Silo 2', 'quantity' => '40', 'resource_id' => '2'],
        	['name' => 'Silo 3', 'quantity' => '60', 'resource_id' => '3'],
        ];

        DB::table('wastes')->insert($wastes);
    }
}
