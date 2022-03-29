<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Demand;

class AdministrativeRegion extends Model
{
    protected $fillable = ['administrative_region_name'];

    use HasFactory;

    /*public function demands(){
        return $this->belongsToMany(Demand::class , 'foreign_key');
    }
    */
    
}
