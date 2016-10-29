<?php

use Illuminate\Database\Seeder;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resources = [
        	['type' => 'f21MB-n', 'img' => 'resource.jpg'],
        	['type' => 'RF23W-n', 'img' => 'resource.jpg'],
        	['type' => 'KSE-20', 'img' => 'resource.jpg'],
        	['type' => 'KSE-30', 'img' => 'resource.jpg'],
        	['type' => 'F21B-n', 'img' => 'resource.jpg'],
        ];

        DB::table('resources')->insert($resources);
    }
}
