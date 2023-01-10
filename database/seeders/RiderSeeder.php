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
            ],
            [
                'name'=>'Fabio Quartaro',
                'number'=>20,
                'nationality'=>'French',
                'team_name'=>'Monster Energy Yamaha Motogp',
            ],
            [
                'name'=>'Joan Mir',
                'number'=>36,
                'nationality'=>'Spain',
                'team_name'=>'Repsol Honda Team',
            ]
        ])->each(function($rider){
            DB::table('riders')->insert($rider);
        });
    }
}
