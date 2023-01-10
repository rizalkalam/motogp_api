<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RiderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name'=>'Maverick Vinales',
                'number'=>12,
                'nationality'=>'Spain',
                'team_name'=>'Aprilia Racing',
                'img_rider'=>'vinales.jpg',
                'icon_rider'=>'MV12',
                'team_id'=>1
            ],
            [
                'name'=>'Fabio Quartaro',
                'number'=>20,
                'nationality'=>'French',
                'team_name'=>'Monster Energy Yamaha Motogp',
                'img_rider'=>'quartararo.jpg',
                'icon_rider'=>'FQ20',
                'team_id'=>2
            ],
            [
                'name'=>'Joan Mir',
                'number'=>36,
                'nationality'=>'Spain',
                'team_name'=>'Repsol Honda Team',
                'img_rider'=>'mir.jpg',
                'icon_rider'=>'JM36',
                'team_id'=>3
            ]
        ])->each(function($rider){
            DB::table('riders')->insert($rider);
        });
    }
}
