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
                'rider_1'=>'Maverick Vinales',
                'rider_2'=>'Aleix Espargaro',
                'img_bike'=>'aprilia.png',
                'rider_id'=>1
            ],
            [
                'name'=>'Monster Energy Yamaha Motogp',
                'bike'=>'Yamaha',
                'rider_1'=>'Fabio Quartararo',
                'rider_2'=>'Franco Morbidelli',
                'img_bike'=>'yamaha.png',
                'rider_id'=>2
            ],
            [
                'name'=>'Repsol Honda Team',
                'bike'=>'Honda',
                'rider_1'=>'Marc Marquez',
                'rider_2'=>'Joan Mir',
                'img_bike'=>'honda.png',
                'rider_id'=>3
            ]
        ])->each(function($team){
            DB::table('teams')->insert($team);
        });
    }
}
