<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interested;

class InterestedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create array for interesteds
        $interesteds = [            
            ['id' => 1, 'interested_name' => 'ADMINISTRAÇÕES REGIONAIS'],
            ['id' => 2, 'interested_name' => 'GDF - OUTROS'],
            ['id' => 3, 'interested_name' => 'NOVACAP'],
            ['id' => 4, 'interested_name' => 'SEORÇA'],
            ['id' => 5, 'interested_name' => 'SES-GDF'],
            ['id' => 6, 'interested_name' => 'VISTORIA TÉCNICA
            '],

        ];

        foreach ($interesteds as $index => $interested) {
            Interested::updateOrCreate(['id' => $interested['id']], $interested);
        }

         /*
         
         updateOrCreate possibilita que a seed seja rodada mais de uma vez  e evita conflito de ID. Além disso acaba com entradas repetidas.
         o foreach abaixo é um exemplo de como daria erro:


           foreach ($interesteds as $nterested) {
                Interested::create($interested);
            }
            */

        
    }
}
