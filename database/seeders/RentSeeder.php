<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Instrument;
use App\Models\Rent;
use Illuminate\Database\Seeder;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('is_employee', 0)->get();
        $employees = User::where('is_employee', 1)->get();
        $instruments = Instrument::where('status', 0)->get();

        foreach ($users as $user) {
            Rent::factory(1)->create([
                'client_id' => $user->id,
                'employee_id' => $employees->random()->id,
                'instrument_id' => $instruments->random()->id,
            ]);
        }
    }
}
