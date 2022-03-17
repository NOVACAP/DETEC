<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['section_name' , 'coordinator_name' ];
    use HasFactory;

    public function processesSections(){
        return $this->hasMany(processesSection::class);
    }

    public function processes(){
        return $this->belongsToMany(Process::class);
    }



    

}
