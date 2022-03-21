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
        $activities = [            
            ['id' => 1, 'activity_name' => 'ANÁLISE DE PROJETO'],
            ['id' => 2, 'activity_name' => 'APOIO A FISCALIZAÇÃO DE OBRAS'],
            ['id' => 2, 'activity_name' => 'APOIO A FISCALIZAÇÃO DE OBRAS'],
            ['id' => 2, 'activity_name' => 'APOIO A FISCALIZAÇÃO DE OBRAS'],
            ['id' => 2, 'activity_name' => 'APOIO A FISCALIZAÇÃO DE OBRAS'],
            
        
            
        ];

        foreach ($activities as $activity) {
            Activity::updateOrCreate(['id' => $activity['id']], $activity);
        }

            /*foreach ($activities as $activity) {
                Activity::create($activity);
            }
            */

       
    }
}
