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
}    
