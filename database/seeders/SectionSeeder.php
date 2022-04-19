<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //create array for sections

         $sections = [
            ['section_name' => 'SEÇÃO DE ARQUITETURA' ,  'coordinator_name' => 'MARIA'],
            ['section_name' => 'SEÇÃO DE INSTALAÇÃO' ,  'coordinator_name' => 'CELSO'],
            ['section_name' => 'SEÇÃO DE ORÇAMENTO' ,  'coordinator_name' => 'JADE'],
        ];

        DB::table('sections')->insert($sections);

//        foreach ($sections as $index => $section) {
//            Section::updateOrCreate(['id' => $section['id']], $section);
//        }

         /*

         updateOrCreate possibilita que a seed seja rodada mais de uma vez  e evita conflito de ID. Além disso acaba com entradas repetidas.
         o foreach abaixo é um exemplo de como daria erro:


           foreach ($sections as $nterested) {
                Section::create($section);
            }
            */
    }
}
