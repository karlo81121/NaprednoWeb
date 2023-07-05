<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Obale Hrvatske',
                    'description' => 'Krk - Hvar - Dubrovnik - Split',
                    'cost' => 600,
                    'dest_type_id' => 1,
                    'dest_transp_type_id' => 1,
                    'state_id' => 3,
                    'created_by_id' => 1,
                    'capacity' => 50,
                    'picture' => 'https://th.bing.com/th/id/R.54010f941c680f1e18cedbe916974c5f?rik=jHF0bLgQS78pPA&riu=http%3a%2f%2fwaypoint.hr%2fwp-content%2fuploads%2f2016%2f04%2fPakleni-islands.jpg&ehk=Bi4qfqkbDsbj4SnBhs66KZWtMCH0sC54u71wwfqgUnU%3d&risl=&pid=ImgRaw&r=0'
                ],
                [
                    'id' => 2,
                    'name' => 'Krš i lom vrhova Hrvatske',
                    'description' => 'Dinara - Velebit - Biokovo',
                    'cost' => 150,
                    'dest_type_id' => 1,
                    'dest_transp_type_id' => 1,
                    'state_id' => 3,
                    'created_by_id' => 1,
                    'capacity' => 50,
                    'picture' => 'https://th.bing.com/th/id/R.a24eb06c18b01af02fa32ce81162d3b2?rik=WGvn%2bb307KRbYA&riu=http%3a%2f%2fcroatia.hr%2fImages%2ft900x600-19473%2fRozanski-vrh.jpg&ehk=XfVOA0KWs9lt6kSrtTgtK35CrZcE8oBFUElo85cLwbU%3d&risl=&pid=ImgRaw&r=0'
                ],
                [
                    'id' => 3,
                    'name' => 'Drvene piramide',
                    'description' => 'Keopsove piramide u Gizi',
                    'cost' => 1000,
                    'dest_type_id' => 1,
                    'dest_transp_type_id' => 1,
                    'state_id' => 1,
                    'created_by_id' => 1,
                    'capacity' => 50,
                    'picture' => 'https://live.staticflickr.com/8186/8441224171_f03e83d76c_b.jpg'
                ],
                [
                    'id' => 4,
                    'name' => 'Krstarenje Nilom',
                    'description' => 'Od Sredozemnog do Arapskog mora',
                    'cost' => 1000,
                    'dest_type_id' => 1,
                    'dest_transp_type_id' => 1,
                    'state_id' => 1,
                    'created_by_id' => 1,
                    'capacity' => 50,
                    'picture' => 'https://th.bing.com/th/id/R.dd36dfd7668c6e9e4cb873d3e8e70b88?rik=qUEM1ywmN4IUzg&pid=ImgRaw&r=0'
                ],
                [
                    'id' => 5,
                    'name' => 'The Kineski zid',
                    'description' => 'Najpoznatiji zid na svijetu',
                    'cost' => 1000,
                    'dest_type_id' => 1,
                    'dest_transp_type_id' => 1,
                    'state_id' => 2,
                    'created_by_id' => 1,
                    'capacity' => 50,
                    'picture' => 'https://th.bing.com/th/id/R.2f0164d73114c4a802bbda9c523140b6?rik=cjn%2fwzrcfKk8%2bA&riu=http%3a%2f%2fwww.thehistoryhub.com%2fwp-content%2fuploads%2f2014%2f05%2fGreat-Wall-of-China.jpg&ehk=tmLVe1z6OiVA0tSoC%2b%2beENTkdg%2fsJLJq7oZ7LcdwnWA%3d&risl=&pid=ImgRaw&r=0'
                ]
            ]
        );
    }
}