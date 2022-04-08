<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $fillable = ['number_process' , 'section_processes_id'];

    
    use HasFactory;
    
    public function sections(){
        return $this->belongsToMany(Section::class);
    }

    public function demands(){
        return $this->belongsToMany(Demand::class);
    }
    


    
}
