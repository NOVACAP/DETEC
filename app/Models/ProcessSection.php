<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessSection extends Model
{
    protected $fillable = ['sections_id' , 'processes_id' ];
   
    use HasFactory;
    
    //relationship one to many with section table
    public function section(){
        return $this->belongsTo(Section::class , 'foreign_key');
    }

    public function process(){
        return $this->belongsToMany(Process::class);
    }

    
}
