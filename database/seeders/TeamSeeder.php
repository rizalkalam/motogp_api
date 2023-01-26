<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
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
                'name'=>'Aprilia Racing',
                'bike'=>'Aprilia',
                'img_bike'=>'aprilia.png',
                'main_color'=>'#5CB43A',
                'team_standings'=>1,
                'team_points'=>200
                // 'rider_1'=>'Maverick Vinales',
                // 'rider_2'=>'Aleix Espargaro',
                // 'rider_id'=>1
            ],
            [
                'name'=>'Monster Energy Yamaha Motogp',
                'bike'=>'Yamaha',
                'img_bike'=>'yamaha.png',
                'main_color'=>'#0A2D82',
                'team_standings'=>2,
                'team_points'=>190
                // 'rider_1'=>'Fabio Quartararo',
                // 'rider_2'=>'Franco Morbidelli',
                // 'rider_id'=>2
            ],
            [
                'name'=>'Repsol Honda Team',
                'bike'=>'Honda',
                'img_bike'=>'honda.png',
                'main_color'=>'#EE8633',
                'team_standings'=>3,
                'team_points'=>159
                // 'rider_1'=>'Marc Marquez',
                // 'rider_2'=>'Joan Mir',
                // 'rider_id'=>3
            ]
        ])->each(function($team){
            DB::table('teams')->insert($team);
        });
    }
}
