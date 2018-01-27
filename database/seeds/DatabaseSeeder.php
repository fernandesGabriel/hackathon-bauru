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
        $this->call(SchemesTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
    }
}
