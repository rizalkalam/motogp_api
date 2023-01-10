<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CircuitSeeder extends Seeder
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
                'name'=>'Autodormo International Do Algarve',
                'location'=>'Portuguese',
                'tag'=>'Portuguese GP',
                'image'=>'portuguesegp.jpg'
            ],
            [
                'name'=>'Termas De Rio Hondo',
                'location'=>'Argentina',
                'tag'=>'Argentina GP',
                'image'=>'argentinagp.jpg'
            ],
            [
                'name'=>'Circuit Of The Americas',
                'location'=>'America',
                'tag'=>'Americas GP',
                'image'=>'americagp.jpg'
            ]
        ])->each(function($circuit){
            DB::table('circuits')->insert($circuit);
        });
    }
}
