<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdministrativeRegion;
use Illuminate\Support\Facades\DB;

class AdministrativeRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //create array for techniqueAreas

         $administrativeRegions = [
            ['administrative_region_name' => 'RA I - Plano Piloto'],
            ['administrative_region_name' => 'RA II - Gama'],
            ['administrative_region_name' => 'RA III - Taguatinga'],
            ['administrative_region_name' => 'RA IV - Brazlândia'],
            ['administrative_region_name' => 'RA V - Sobradinho'],
            ['administrative_region_name' => 'RA VI - Planaltina'],
            ['administrative_region_name' => 'RA VII -  Paranoá'],
            ['administrative_region_name' => 'RA VIII - Núcleo Bandeirante'],
            ['administrative_region_name' => 'RA IX - Ceilândia'],
            ['administrative_region_name' => 'RA X - Guará'],
            ['administrative_region_name' => 'RA XI - Cruzeiro'],
            ['administrative_region_name' => 'RA XII - Samambaia'],
            ['administrative_region_name' => 'RA XIII - Santa Maria'],
            ['administrative_region_name' => 'RA XIV - São Sebastião'],
            ['administrative_region_name' => 'RA XV - Recanto das Emas'],
            ['administrative_region_name' => 'RA XVI - Lago Sul'],
            ['administrative_region_name' => 'RA XVII -  Riacho Fundo I'],
            ['administrative_region_name' => 'RA XVIII - Lago Norte'],
            ['administrative_region_name' => 'RA XIX - Candangolândia'],
            ['administrative_region_name' => 'RA XX - Águas Claras'],
            ['administrative_region_name' => 'RA XXI -  Riacho Fundo II'],
            ['administrative_region_name' => 'RA XXII - Sudoeste/Octogonal'],
            ['administrative_region_name' => 'RA XXIII - Varjão'],
            ['administrative_region_name' => 'RA XXIV -  Park Way'],
            ['administrative_region_name' => 'RA XXV - SCIA'],
            ['administrative_region_name' => 'RA XXVI - Sobradinho II'],
            ['administrative_region_name' => 'RA XXVII - Itapoã'],
            ['administrative_region_name' => 'RA XXVIII - Jardim Botânico'],
            ['administrative_region_name' => 'RA XXIX - SIA'],
            ['administrative_region_name' => 'RA XXX - Vicente Pires'],
            ['administrative_region_name' => 'RA XXXI - Fercal'],
            ['administrative_region_name' => 'RA XXXII- Por do Sol'],
            ['administrative_region_name' => 'RA XXXIII -  Arniqueira'],
        ];

        sort($administrativeRegions);

        DB::table('administrative_regions')->insert($administrativeRegions);

//        foreach ($administrativeRegions as $index => $administrativeRegion) {
//            AdministrativeRegion::updateOrCreate(['id' => $administrativeRegion['id']], $administrativeRegion);
//        }



         /*

         updateOrCreate possibilita que a seed seja rodada mais de uma vez  e evita conflito de ID. Além disso acaba com entradas repetidas.
         o foreach abaixo é um exemplo de como daria erro:


           foreach ($administrativeRegions as $index => $administrativeRegion) {
                Section::create($administrativeRegion);
            }
            */
    }
}
