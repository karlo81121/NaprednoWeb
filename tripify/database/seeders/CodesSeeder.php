<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roles
        DB::table('roles')->insert(
            [
                [
                    'id' => 1,
                    'code' => 'ADM',
                    'name' => 'Administrator'
                ]
            ,
                [
                    'id' => 2,
                    'code' => 'AGN',
                    'name' => 'Travel Agency'
                ],
                [
                    'id' => 3,
                    'code' => 'USER',
                    'name' => 'Customer user'
                ]
            ]
        );

        //States
        DB::table('states')->insert(
            [
                [
                    'id' => 1,
                    'code' => 'EG',
                    'name' => 'Egypt'
                ]
            ,
                [
                    'id' => 2,
                    'code' => 'CN',
                    'name' => 'China'
                ],
                [
                    'id' => 3,
                    'code' => 'HR',
                    'name' => 'Croatia'
                ]
            ]
        );

        //CancellationReasons
        DB::table('cancellation_reasons')->insert(
            [
                [
                    'id' => 1,
                    'code' => '1',
                    'description' => 'Cancelled by user'
                ],
                [
                    'id' => 2,
                    'code' => '2',
                    'description' => 'Cancelled by agency'
                ],
                [
                    'id' => 3,
                    'code' => '3',
                    'description' => 'Cancelled by administrator'
                ],
            ]
        );

        //DestinationReservationStatuses
        DB::table('destination_reservation_statuses')->insert(
            [
                [
                    'id' => 1,
                    'code' => 'PEND',
                    'description' => 'User reservation pending for review by agency'
                ],
                [
                    'id' => 2,
                    'code' => 'APPR',
                    'description' => 'User reservation approved'
                ],
                [
                    'id' => 3,
                    'code' => 'DECL',
                    'description' => 'User reservation declined'
                ]
            ]
        );

        //DestinationTransportationTypes
        DB::table('destination_transport_types')->insert(
            [
                [
                    'id' => 1,
                    'code' => 'FLY',
                    'description' => 'By plane'
                ],
                [
                    'id' => 2,
                    'code' => 'BUS',
                    'description' => 'By shuttle'
                ],
                [
                    'id' => 3,
                    'code' => 'SEA',
                    'description' => 'By boat'
                ],
                [
                    'id' => 4,
                    'code' => 'TRA',
                    'description' => 'By train'
                ]
            ]
        );

        //DestinationTypes
        DB::table('destination_types')->insert(
            [
                [
                    'id' => 1,
                    'code' => 'EXC',
                    'description' => 'Exclusive destination'
                ],
                [
                    'id' => 2,
                    'code' => 'DAY',
                    'description' => 'Daily destination'
                ]
            ]
        );
    }
}
