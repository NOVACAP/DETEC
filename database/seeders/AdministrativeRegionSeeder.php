<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdministrativeRegion;

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
            ['id' => 1, 'administrative_region_name' => 'RA I - Plano Piloto'],
            ['id' => 2, 'administrative_region_name' => 'RA II - Gama'],
            ['id' => 3, 'administrative_region_name' => 'RA III - Taguatinga'],
            ['id' => 4, 'administrative_region_name' => 'RA IV - Brazlândia'],
            ['id' => 5, 'administrative_region_name' => 'RA V - Sobradinho'],
            ['id' => 6, 'administrative_region_name' => 'RA VI - Planaltina'],
            ['id' => 7, 'administrative_region_name' => 'RA VII -  Paranoá'],
            ['id' => 8, 'administrative_region_name' => 'RA VIII - Núcleo Bandeirante'],
            ['id' => 9, 'administrative_region_name' => 'RA IX - Ceilândia'],
            ['id' => 10, 'administrative_region_name' => 'RA X - Guará'],
            ['id' => 11, 'administrative_region_name' => 'RA XI - Cruzeiro'],
            ['id' => 12, 'administrative_region_name' => 'RA XII - Samambaia'],
            ['id' => 13, 'administrative_region_name' => 'RA XIII - Santa Maria'],
            ['id' => 14, 'administrative_region_name' => 'RA XIV - São Sebastião'],
            ['id' => 15, 'administrative_region_name' => 'RA XV - Recanto das Emas'],
            ['id' => 16, 'administrative_region_name' => 'RA XVI - Lago Sul'],
            ['id' => 17, 'administrative_region_name' => 'RA XVII -  Riacho Fundo I'],
            ['id' => 18, 'administrative_region_name' => 'RA XVIII - Lago Norte'],
            ['id' => 19, 'administrative_region_name' => 'RA XIX - Candangolândia'],
            ['id' => 20, 'administrative_region_name' => 'RA XX - Águas Claras'],
            ['id' => 21, 'administrative_region_name' => 'RA XXI -  Riacho Fundo II'],
            ['id' => 22, 'administrative_region_name' => 'RA XXII - Sudoeste/Octogonal'],
            ['id' => 23, 'administrative_region_name' => 'RA XXIII - Varjão'],
            ['id' => 24, 'administrative_region_name' => 'RA XXIV -  Park Way'],
            ['id' => 22, 'administrative_region_name' => 'RA XXV - SCIA'],
            ['id' => 26, 'administrative_region_name' => 'RA XXVI - Sobradinho II'],
            ['id' => 27, 'administrative_region_name' => 'RA XXVII - Itapoã'],
            ['id' => 28, 'administrative_region_name' => 'RA XXVIII - Jardim Botânico'],
            ['id' => 29, 'administrative_region_name' => 'RA XXIX - SIA'],
            ['id' => 30, 'administrative_region_name' => 'RA XXX - Vicente Pires'],
            ['id' => 31, 'administrative_region_name' => 'RA XXXI - Fercal'],
            ['id' => 32, 'administrative_region_name' => 'RA XXXII- Por do Sol'],
            ['id' => 33, 'administrative_region_name' => 'RA XXXIII -  Arniqueira'],
        ];

        sort($administrativeRegions);

        foreach ($administrativeRegions as $index => $administrativeRegion) {
            AdministrativeRegion::updateOrCreate(['id' => $administrativeRegion['id']], $administrativeRegion);
        }



         /*
         
         updateOrCreate possibilita que a seed seja rodada mais de uma vez  e evita conflito de ID. Além disso acaba com entradas repetidas.
         o foreach abaixo é um exemplo de como daria erro:


           foreach ($administrativeRegions as $index => $administrativeRegion) {
                Section::create($administrativeRegion);
            }
            */
    }
}
