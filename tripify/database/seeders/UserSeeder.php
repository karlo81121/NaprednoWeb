<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Fran',
                    'surname' => null,
                    'email' => 'fran@gmail.com',
                    'password' => Hash::make('12345'),
                    'role_id' => 2,
                    'description' => 'Opis',
                    'isverified' => false
                ],
                [
                    'id' => 2,
                    'name' => 'Karlo',
                    'surname' => 'Bruno',
                    'email' => 'karloibruno@gmail.com',
                    'password' => Hash::make('12345'),
                    'role_id' => 3,
                    'description' => null,
                    'isverified' => false
                ]
            ]
        );
    }
}