<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandsEmployer extends Model
{
    protected $fillable = ['demands_employers' , 'employer_id' , 'demand_id'];

    use HasFactory;

    public function demand(){
        return $this->belongsTo(Demand::class , 'foreign_key');
    }

    public function employers(){
        return $this->belongsToMany(Employer::class, 'foreign_key');
    }
    
}
