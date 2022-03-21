<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TechniqueArea;

class TechniqueAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //create array for techniqueAreas

         $techniqueAreas = [            
            ['id' => 1, 'technique_area_name' => 'DIVERSOS'],
            ['id' => 2, 'technique_area_name' => 'ELÉTRICA'],
            ['id' => 3, 'technique_area_name' => 'ESTRUTURA CONCRETO'],
            ['id' => 4, 'technique_area_name' => 'ESTRUTURA METÁLICA'],
            ['id' => 5, 'technique_area_name' => 'HIDRÁULICA E INCÊNDIO'],
            ['id' => 6, 'technique_area_name' => 'HIDROSSANITÁRIO'],
            ['id' => 7, 'technique_area_name' => 'MECÂNICA'],
            ['id' => 8, 'technique_area_name' => 'PCI'],
        ];

        foreach ($techniqueAreas as $index => $techniqueArea) {
            TechniqueArea::updateOrCreate(['id' => $techniqueArea['id']], $techniqueArea);
        }

         /*
         
         updateOrCreate possibilita que a seed seja rodada mais de uma vez  e evita conflito de ID. Além disso acaba com entradas repetidas.
         o foreach abaixo é um exemplo de como daria erro:


           foreach ($techniqueAreas as $index => $techniqueArea) {
                Section::create($techniqueArea);
            }
            */
    }
}
