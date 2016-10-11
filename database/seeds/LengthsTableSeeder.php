<?php

use Illuminate\Database\Seeder;

class LengthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lengths = [
        	['length' => 8],
        	['length' => 6],
        	['length' => 4],
        ];

        DB::table('lengths')->insert($lengths);
    }
}
