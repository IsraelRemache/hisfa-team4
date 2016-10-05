<?php

use Illuminate\Database\Seeder;

class QualitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qualities = [
        	['name' => 'P15'],
        	['name' => '60SE'],
        	['name' => 'P20'],
        	['name' => '100SE'],
        	['name' => 'P25'],
        	['name' => '150SE'],
        	['name' => 'P30'],
        	['name' => '200SE'],
        	['name' => 'P35'],
        	['name' => '250SE'],
        ];

        DB::table('qualities')->insert($qualities);
    }
}
