<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	['name' => 'Robrecht', 'email' => 'robrecht@hotmail.com', 'password' => 'robrecht', 'img' => ''],
        	['name' => 'Izzy', 'email' => 'izzy@hotmail.com', 'password' => 'izzy', 'img' => ''],
        	['name' => 'Miguel', 'email' => 'miguel@hotmail.com', 'password' => 'miguel', 'img' => ''],
        	['name' => 'Jens', 'email' => 'jens@hotmail.com', 'password' => 'jens', 'img' => ''],
        ];

        DB::table('users')->insert($users);
    }
}
