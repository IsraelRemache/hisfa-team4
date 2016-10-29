<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(QualitiesTableSeeder::class);
        $this->call(LengthsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ResourcesTableSeeder::class);
        $this->call(PrimesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(WastesTableSeeder::class);
        $this->call(StocksTableSeeder::class);
    }
}
