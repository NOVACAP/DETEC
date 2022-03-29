<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Interested;
use App\Models\AdministrativeRegion;
use App\Models\ThematicArea;
use App\Models\DemandsEmployer;
use App\Models\TechniqueArea;
use App\Models\Activity;
use App\Models\Process;


class Demand extends Model
{
    protected $fillable = [
        'date_input_demand' ,
        'date_distribution_demand',
        'delivery_demand' ,
        'address_demand',
        'activity_id',
        'interested_id',
        'technique_area_id',
        'thematic_areas_id',
        'administrative_region_id',
        'process_id',
        'demands_employer_id',
      ];

      protected $dates = [
        'date_input_demand',
        'date_distribution_demand',
        'delivery_demand',
    ];

      use HasFactory;

    //relationship one to many with interested table
      public function interested(){
        return $this->hasOne(Interested::class , 'id' , 'interested_id');
      }

      //relationship one to many with thematicAreatable
      public function thematicArea(){
        return $this->hasOne(ThematicArea::class , 'id' , 'thematic_areas_id');
      }

      //relationship one to many with administrativeRegion
      public function administrativeRegion(){
        return $this->hasOne(AdministrativeRegion::class , 'id' , 'administrative_region_id');
      }

      public function demandsEmployer(){
        return $this->hasMany(DemandsEmployer::class ,  'id' , 'demands_employer_id');
      }

      public function techniqueAreas(){
        return $this->hasMany(TechniqueArea::class , 'id' , 'technique_area_id');
      }

      //classe, id da tabela activities, campo da tabela demanda que faz referencia a tabela activities 
      public function activities(){
        return $this->hasMany(Activity::class , 'id' , 'activity_id');
    }

    public function process(){
      return $this->hasOne(Process::class , 'id' , 'process_id');
  }
      
    
}    
