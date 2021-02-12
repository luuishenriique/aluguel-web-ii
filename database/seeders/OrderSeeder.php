<?php

namespace Database\Seeders;

use App\Models\Rent;
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rents = Rent::all();

        foreach ($rents as $rent) {
            Order::factory(1)->create([
               'rent_id' => $rent->id,
           ]);
        }
    }
}
