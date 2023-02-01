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
                'img_flag'=>'Spain',     
                'img_rider'=>'vinales.jpg',
                'icon_rider'=>'MV12',
                'date_of_brith'=>'1996/01/12',
                'place_of_brith'=>'Figueres',
                'height'=>171,
                'weight'=>64,
                'gp_victories'=>9,
                'worldchampionships'=>0,
                'team_id'=>1
            ],
            [
                'name'=>'Fabio Quartaro',
                'number'=>20,
                'img_flag'=>'French',
                'img_rider'=>'quartararo.jpg',
                'icon_rider'=>'FQ20',
                'date_of_brith'=>'1999/04/20',
                'place_of_brith'=>'Nice',
                'height'=>177,
                'weight'=>66,
                'gp_victories'=>11,
                'worldchampionships'=>1,
                'team_id'=>2
            ],
            [
                'name'=>'Joan Mir',
                'number'=>36,
                'img_flag'=>'Spain',
                'img_rider'=>'mir.jpg',
                'icon_rider'=>'JM36',
                'date_of_brith'=>'1997/09/01',
                'place_of_brith'=>'Palma de Mallorca',
                'height'=>171,
                'weight'=>64,
                'gp_victories'=>1,
                'worldchampionships'=>1,
                'team_id'=>3
            ]
        ])->each(function($rider){
            DB::table('riders')->insert($rider);
        });
    }
}
