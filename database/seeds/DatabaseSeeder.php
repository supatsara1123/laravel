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
       $this->call(CategoryTabelSeeder::class);
       $this->call(ProductTabelSeeder::class);
    }
}
