<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Demand;

class TechniqueArea extends Model
{
    protected $fillable = ['technique_area_name'];

    use HasFactory;

    /*public function demands(){
        return $this->belongsToMany(Demand::class);
    } 
    */   
}
