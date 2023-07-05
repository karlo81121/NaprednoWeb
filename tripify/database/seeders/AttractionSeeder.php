<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attractions')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Piramida',
                    'description' => 'Najveca piramida na svijetu',
                    'destination_id' => 3,
                    'picture' => 'https://media-cdn.tripadvisor.com/media/photo-s/0a/a6/10/2e/keops-pyramid.jpg'
                ]
            ,
                [
                    'id' => 2,
                    'name' => 'Hvar',
                    'description' => 'Najosuncaniji otok u Hrvatskoj',
                    'destination_id' => 1,
                    'picture' => 'https://th.bing.com/th/id/OIP.1pOaz_cM0JARhrrI8Zt-8QHaE6?pid=ImgDet&rs=1'
                ],
                [
                    'id' => 3,
                    'name' => 'Dinara',
                    'description' => 'Najveci vrh u Hrvatskoj',
                    'destination_id' => 2,
                    'picture' => 'https://s3-us-west-1.amazonaws.com/peakery-media/images/items/main/cache/dinara-0.jpg.910x680_q95.jpg'
                ],
                [
                    'id' => 4,
                    'name' => 'Nil',
                    'description' => 'Najveca rijeka',
                    'destination_id' => 4,
                    'picture' => 'https://th.bing.com/th/id/R.aee7d12ec2d64249aa6f483bb8a0ca83?rik=0XBLRzvCtgD8mQ&pid=ImgRaw&r=0'
                ],
                [
                    'id' => 5,
                    'name' => 'Kineski zid',
                    'description' => 'Najdrvenija atrakcija na svijetu',
                    'destination_id' => 5,
                    'picture' => 'https://th.bing.com/th/id/R.fce5bb6307e5128cb27d406b07b2fb37?rik=lhJ9DxtOIOSW5Q&pid=ImgRaw&r=0'
                ]
            ]
        );
    }
}
