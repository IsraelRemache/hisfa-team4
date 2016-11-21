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
        $user = [
            [ 'name' => 'admin', 'email' => 'admin@admin.com', 'password' => Hash::make( 'admin' )],
        	[ 'name' => 'tom', 'email' => 'tom@changeme.hisfa', 'password' => Hash::make( 'hisfa' )],
        ];

        DB::table('users')->insert($user);
    }
}
