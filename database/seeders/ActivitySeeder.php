<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;
use Illuminate\Support\Facades\DB;

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
            ['activity_name' => 'ANÁLISE DE PROJETO'],
            ['activity_name' => 'APOIO A FISCALIZAÇÃO DE OBRAS'],
            ['activity_name' => 'ELABORAÇÃO DE PROJETOS'],
            ['activity_name' => 'OUTRAS ATIVIDADES'],
            ['activity_name' => 'TERMO DE REFERÊNCIA'],
            ['activity_name' => 'VISTORIA TÉCNICA'],

        ];

        DB::table('activities')->insert($activities);

//        foreach ($activities as $index => $activity) {
//            Activity::updateOrCreate(['id' => $activity['id']], $activity);
//        }

         /*

         updateOrCreate possibilita que a seed seja rodada mais de uma vez  e evita conflito de ID. Além disso acaba com entradas repetidas.
         o foreach abaixo é um exemplo de como daria erro:


           foreach ($activities as $activity) {
                Activity::create($activity);
            }
            */


    }
}
