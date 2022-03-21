<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create array for activities
        $activities = [            
            ['id' => 1, 'activity_name' => 'ANÁLISE DE PROJETO'],
            ['id' => 2, 'activity_name' => 'APOIO A FISCALIZAÇÃO DE OBRAS'],
            ['id' => 3, 'activity_name' => 'ELABORAÇÃO DE PROJETOS'],
            ['id' => 4, 'activity_name' => 'OUTRAS ATIVIDADES'],
            ['id' => 5, 'activity_name' => 'TERMO DE REFERÊNCIA'],
            ['id' => 6, 'activity_name' => 'VISTORIA TÉCNICA
            '],

        ];
        


        foreach ($activities as $activity) {
            Activity::updateOrCreate(['id' => $activity['id']], $activity);
        }

         /*
         
         updateOrCreate possibilita que a seed seja rodada mais de uma vez  e evita conflito de ID. Além disso acaba com entradas repetidas.
         o foreach abaixo é um exemplo de como daria erro:


           foreach ($activities as $activity) {
                Activity::create($activity);
            }
            */

       
    }
}
