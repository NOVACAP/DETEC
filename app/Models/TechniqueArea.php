<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechniqueArea extends Model
{
    protected $fillable = ['technique_area_name'];

    public function demands(){
        return $this->belongsToMany(demands::class , 'foreign_key');
    }

    use HasFactory;
}
