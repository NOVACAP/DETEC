<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interested;
use Illuminate\Support\Facades\DB;

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
            ['interested_name' => 'ADMINISTRAÇÕES REGIONAIS'],
            ['interested_name' => 'GDF - OUTROS'],
            ['interested_name' => 'NOVACAP'],
            ['interested_name' => 'SEORÇA'],
            ['interested_name' => 'SES-GDF'],
            ['interested_name' => 'VISTORIA TÉCNICA'],

        ];

        DB::table('interesteds')->insert($interesteds);

//        foreach ($interesteds as $index => $interested) {
//            Interested::updateOrCreate(['id' => $interested['id']], $interested);
//        }

         /*

         updateOrCreate possibilita que a seed seja rodada mais de uma vez  e evita conflito de ID. Além disso acaba com entradas repetidas.
         o foreach abaixo é um exemplo de como daria erro:


           foreach ($interesteds as $nterested) {
                Interested::create($interested);
            }
            */


    }
}
