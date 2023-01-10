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
            ],
            [
                'name'=>'Monster Energy Yamaha Motogp',
                'bike'=>'Yamaha',
                'rider_1'=>'Fabio Quartararo',
                'rider_2'=>'Franco Morbidelli',
            ],
            [
                'name'=>'Repsol Honda Team',
                'bike'=>'Honda',
                'rider_1'=>'Marc Marquez',
                'rider_2'=>'Joan Mir',
            ]
        ])->each(function($team){
            DB::table('teams')->insert($team);
        });
    }
}
