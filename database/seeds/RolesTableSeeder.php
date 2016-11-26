<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	['name' => 'guest'],
        	['name' => 'employee'],
        	['name' => 'moderator'],
        	['name' => 'admin'],
        ];

        DB::table('roles')->insert($roles);
    }
}
