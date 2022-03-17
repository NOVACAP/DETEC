<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandsEmployer extends Model
{
    protected $fillable = ['demands_employers' , 'employer_id' , 'demand_id'];

    public function demands(){
        return $this->hasMany(Demand::class , 'foreign_key');
    }
    
    use HasFactory;
}
