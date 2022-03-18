<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ThematicArea extends Model
{
    protected $fillable = ['thematic_area_name' ];

    use HasFactory;

    public function demands(){
        return $this->hasMany(Demand::class , 'foreign_key');
    }

    
}
