<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

      use HasFactory;

    //relationship one to many with interested table
      public function interested(){
        return $this->belongsTo(Interested::class , 'foreign_key');
      }

      //relationship one to many with thematicAreatable
      public function thematicArea(){
        return $this->belongsTo(ThematicArea::class , 'foreign_key');
      }

      //relationship one to many with administrativeRegion
      public function administrativeRegion(){
        return $this->belongsTo(AdministrativeRegion::class , 'foreign_key');
      }

      public function DemandsEmployer(){
        return $this->belongsToMany(DemandsEmployer::class , 'foreign_key');
      }

      public function techniqueArea(){
        return $this->belongsToMany(TechniqueArea::class , 'foreign_key');
      }

      public function activities(){
        return $this->belongsToMany(Activity::class , 'foreign_key');
    }
      
    
}    
