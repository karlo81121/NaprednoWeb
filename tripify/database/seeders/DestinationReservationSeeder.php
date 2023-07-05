<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destination_reservations')->insert(
            [
                [
                    'user_id' => 2,
                    'destination_id' => 1,
                    'reserv_status_id' => 1
                ],
                [
                    'user_id' => 2,
                    'destination_id' => 3,
                    'reserv_status_id' => 2
                ],
                [
                    'user_id' => 2,
                    'destination_id' => 2,
                    'reserv_status_id' => 3
                ]
            ]
        );
    }
}
