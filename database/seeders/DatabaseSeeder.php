<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create(['is_employee' => 0]);
        \App\Models\User::factory(5)->create(['is_employee' => 1]);
        \App\Models\Instrument::factory(5)->create(['status' => 1]);
        \App\Models\Instrument::factory(5)->create(['status' => 0]);
        $this->call([
        	RentSeeder::class,
        	OrderSeeder::class,
        ]);
    }
}
