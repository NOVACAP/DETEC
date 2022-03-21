<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ThematicArea;


class ThematicAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create array for thematicAreas
        $thematicAreas = [            
            ['id' => 1, 'thematic_area_name' => 'DIVERSOS'],
            ['id' => 2, 'thematic_area_name' => 'SAÚDE'],
        ];

        foreach ($thematicAreas as $index => $thematicArea) {
            ThematicArea::updateOrCreate(['id' => $thematicArea['id']], $thematicArea);
        }

         /*
         
         updateOrCreate possibilita que a seed seja rodada mais de uma vez  e evita conflito de ID. Além disso acaba com entradas repetidas.
         o foreach abaixo é um exemplo de como daria erro:


           foreach ($thematicAreas as $nterested) {
                ThematicArea::create($thematicArea);
            }
            */
    }
}
