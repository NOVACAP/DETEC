<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TechniqueArea;
use Illuminate\Support\Facades\DB;

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
            ['technique_area_name' => 'DIVERSOS'],
            ['technique_area_name' => 'ELÉTRICA'],
            ['technique_area_name' => 'ESTRUTURA CONCRETO'],
            ['technique_area_name' => 'ESTRUTURA METÁLICA'],
            ['technique_area_name' => 'HIDRÁULICA E INCÊNDIO'],
            ['technique_area_name' => 'HIDROSSANITÁRIO'],
            ['technique_area_name' => 'MECÂNICA'],
            ['technique_area_name' => 'PCI'],
        ];

        DB::table('technique_areas')->insert($techniqueAreas);

//        foreach ($techniqueAreas as $index => $techniqueArea) {
//            TechniqueArea::updateOrCreate(['id' => $techniqueArea['id']], $techniqueArea);
//        }

         /*

         updateOrCreate possibilita que a seed seja rodada mais de uma vez  e evita conflito de ID. Além disso acaba com entradas repetidas.
         o foreach abaixo é um exemplo de como daria erro:


           foreach ($techniqueAreas as $index => $techniqueArea) {
                Section::create($techniqueArea);
            }
            */
    }
}
